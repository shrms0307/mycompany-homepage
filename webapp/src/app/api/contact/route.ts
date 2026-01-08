import { NextResponse } from "next/server";
import nodemailer from "nodemailer";

const CONTACT_TO = process.env.CONTACT_TO || "account1@the-viral.co.kr";
const SMTP_HOST = process.env.SMTP_HOST || "";
const SMTP_PORT = process.env.SMTP_PORT ? Number(process.env.SMTP_PORT) : 587;
const SMTP_USER = process.env.SMTP_USER || "";
const SMTP_PASS = process.env.SMTP_PASS || "";

function missingConfig() {
  return !SMTP_HOST || !SMTP_USER || !SMTP_PASS;
}

export async function POST(request: Request) {
  if (missingConfig()) {
    return NextResponse.json(
      { error: "SMTP 설정이 누락되어 전송할 수 없습니다. 관리자에게 문의해주세요." },
      { status: 500 }
    );
  }

  let payload: Record<string, unknown>;
  try {
    payload = await request.json();
  } catch (error) {
    return NextResponse.json({ error: "잘못된 요청입니다." }, { status: 400 });
  }

  const name = (payload.name as string | undefined)?.trim();
  const email = (payload.email as string | undefined)?.trim();
  const phone = (payload.phone as string | undefined)?.trim();
  const inquiry = (payload.inquiry as string | undefined)?.trim();
  const message = (payload.message as string | undefined)?.trim();

  if (!name || !email || !phone || !inquiry || !message) {
    return NextResponse.json({ error: "이름, 연락처, 이메일, 문의 항목, 내용을 모두 입력해주세요." }, { status: 400 });
  }

  const subject = `더바이럴 문의 - ${name} (${inquiry})`;
  const lines = [
    `이름: ${name}`,
    `이메일: ${email}`,
    `연락처: ${phone}`,
    `문의 항목: ${inquiry}`,
    "",
    "문의 내용:",
    message,
  ].filter(Boolean);

  const transporter = nodemailer.createTransport({
    host: SMTP_HOST,
    port: SMTP_PORT,
    secure: SMTP_PORT === 465,
    auth: {
      user: SMTP_USER,
      pass: SMTP_PASS,
    },
  });

  try {
    await transporter.sendMail({
      from: `THE VIRAL 문의 <${SMTP_USER}>`,
      to: CONTACT_TO,
      subject,
      text: lines.join("\n"),
    });
    return NextResponse.json({ ok: true });
  } catch (error) {
    console.error("contact send error", error);
    return NextResponse.json({ error: "전송 중 오류가 발생했습니다. 잠시 후 다시 시도해주세요." }, { status: 500 });
  }
}
