"use client";

import { FormEvent, useEffect, useState } from "react";
import { Footer } from "@/components/Footer";
import { NavBar } from "@/components/NavBar";

const inquiryOptions = ["사업 문의", "제휴 문의", "기타 문의"];

export default function ContactPage() {
  const [status, setStatus] = useState<"idle" | "loading" | "success" | "error">("idle");
  const [errorMessage, setErrorMessage] = useState("");

  useEffect(() => {
    const elements = Array.from(document.querySelectorAll<HTMLElement>(".will-reveal"));
    if (!elements.length) return;

    const observer = new IntersectionObserver(
      (entries, obs) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("is-visible");
            obs.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.2 }
    );

    elements.forEach((el) => observer.observe(el));
    return () => observer.disconnect();
  }, []);

  const handleSubmit = async (event: FormEvent<HTMLFormElement>) => {
    event.preventDefault();
    setStatus("loading");
    setErrorMessage("");

    const formEl = event.currentTarget;
    const form = new FormData(formEl);

    const name = (form.get("name") || "").toString().trim();
    const email = (form.get("email") || "").toString().trim();
    const phone = (form.get("phone") || "").toString().trim();
    const inquiry = (form.get("inquiry") || "").toString();
    const message = (form.get("message") || "").toString().trim();

    try {
      const res = await fetch("/api/contact", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ name, email, phone, inquiry, message }),
      });

      if (!res.ok) {
        const data = await res.json().catch(() => null);
        const err = (data as { error?: string } | null)?.error || "전송에 실패했습니다.";
        setErrorMessage(err);
        setStatus("error");
        return;
      }

      formEl.reset();
      setStatus("success");
    } catch (error) {
      console.error(error);
      setErrorMessage("전송 중 오류가 발생했습니다. 잠시 후 다시 시도해주세요.");
      setStatus("error");
    }
  };

  return (
    <main className="space-y-20 pb-20">
      <NavBar />

      <section className="relative mx-auto flex max-w-6xl flex-col gap-8 rounded-[32px] border border-white/10 bg-gradient-to-br from-white/5 via-white/0 to-white/10 px-6 py-12 shadow-2xl lg:flex-row lg:items-stretch">
        <div className="pointer-events-none absolute inset-0 opacity-60">
          <div className="absolute left-[-20%] top-[-20%] h-64 w-64 rounded-full bg-brand-blue/20 blur-3xl" />
          <div className="absolute right-[-10%] bottom-[-20%] h-72 w-72 rounded-full bg-cyan-400/15 blur-3xl" />
        </div>
        <div
          className="will-reveal relative flex-1 rounded-3xl bg-black/30 px-8 py-10 shadow-inner shadow-black/40 ring-1 ring-white/10"
          style={{ transitionDelay: "40ms" }}
        >
          <p className="text-sm font-semibold uppercase tracking-[0.24em] text-brand-blue">Contact</p>
          <h1 className="mt-2 text-3xl font-bold sm:text-4xl">문의하기</h1>
          <p className="mt-3 text-lg text-gray-200">서비스 문의 AM 8:30 ~ PM 5:30</p>
          <div className="mt-6 space-y-2 text-lg font-semibold text-white">
            <p>T: 02-515-7002</p>
            <p>E: account1@the-viral.co.kr</p>
          </div>
          <div className="mt-6 flex flex-wrap gap-3 text-sm font-semibold text-black">
            <a
              href="mailto:account1@the-viral.co.kr"
              className="rounded-full bg-brand-blue px-5 py-2 shadow-lg shadow-sky-500/20 transition hover:-translate-y-0.5"
            >
              이메일로 문의하기
            </a>
            <a
              href="tel:025157002"
              className="rounded-full border border-white/20 px-5 py-2 text-white transition hover:-translate-y-0.5 hover:border-brand-blue/60 hover:text-brand-blue"
            >
              02-515-7002 연결
            </a>
          </div>
        </div>

        <div
          className="will-reveal relative flex-1 rounded-3xl border border-white/10 bg-white/5 p-6 shadow-xl backdrop-blur"
          style={{ transitionDelay: "120ms" }}
        >
          <div className="absolute right-4 top-4 rounded-full border border-white/10 px-3 py-1 text-xs font-semibold text-brand-blue">
            THE VIRAL
          </div>
          <p className="text-sm text-gray-300">브랜드를 위한 최고의 파트너</p>
          <h3 className="mt-2 text-2xl font-bold text-white">당신의 브랜드를 함께 확산합니다</h3>
          <p className="mt-3 text-gray-300">필수 정보를 입력하시고 문의 전송하기를 눌러주세요.</p>
        </div>
      </section>

      <section className="mx-auto max-w-6xl px-6 grid gap-8 lg:grid-cols-[1.2fr_1fr]">
        <form
          onSubmit={handleSubmit}
          className="will-reveal relative overflow-hidden rounded-3xl border border-white/10 bg-white/5 p-8 shadow-2xl backdrop-blur"
          style={{ transitionDelay: "80ms" }}
        >
          <div className="pointer-events-none absolute inset-0 opacity-60">
            <div className="absolute left-[-10%] top-[-20%] h-48 w-48 rounded-full bg-brand-blue/15 blur-3xl" />
            <div className="absolute right-[-10%] bottom-[-20%] h-64 w-64 rounded-full bg-cyan-400/10 blur-3xl" />
          </div>
          <div className="relative space-y-6">
            <div>
              <p className="text-sm font-semibold uppercase tracking-[0.2em] text-brand-blue">Brief</p>
              <h2 className="text-2xl font-bold">프로젝트 내용을 알려주세요</h2>
              <p className="text-gray-300">가능한 자세히 적어주실수록 더 정확히 제안드릴 수 있어요.</p>
            </div>

            <div className="grid gap-4 md:grid-cols-2">
              <label className="space-y-2">
                <span className="text-sm text-gray-300">성명 *</span>
                <input
                  name="name"
                  required
                  className="w-full rounded-2xl border border-white/10 bg-black/30 px-4 py-3 text-white outline-none transition focus:border-brand-blue/70"
                  placeholder="성명을 입력해 주세요"
                />
              </label>
              <label className="space-y-2">
                <span className="text-sm text-gray-300">연락받으실 번호 *</span>
                <input
                  name="phone"
                  required
                  className="w-full rounded-2xl border border-white/10 bg-black/30 px-4 py-3 text-white outline-none transition focus:border-brand-blue/70"
                  placeholder="숫자만 입력"
                />
              </label>
              <label className="space-y-2">
                <span className="text-sm text-gray-300">이메일 *</span>
                <input
                  name="email"
                  type="email"
                  required
                  className="w-full rounded-2xl border border-white/10 bg-black/30 px-4 py-3 text-white outline-none transition focus:border-brand-blue/70"
                  placeholder="연락받으실 메일"
                />
              </label>
              <label className="space-y-2">
                <span className="text-sm text-gray-300">문의 항목 *</span>
                <select
                  name="inquiry"
                  required
                  className="w-full text-sm rounded-2xl border border-white/10 bg-black/30 px-4 py-3 text-white outline-none transition focus:border-brand-blue/70"
                  defaultValue=""
                >
                  <option value="" disabled className="bg-[#0b0f1a] text-gray-400">
                    문의하실 항목을 선택해 주세요
                  </option>
                  {inquiryOptions.map((opt) => (
                    <option key={opt} value={opt} className="bg-[#0b0f1a] text-white">
                      {opt}
                    </option>
                  ))}
                </select>
              </label>
            </div>

            <label className="mt-4 space-y-2">
              <span className="text-sm text-gray-300">문의 내용 *</span>
              <textarea
                name="message"
                required
                rows={5}
                className="w-full rounded-2xl border border-white/10 bg-black/30 px-4 py-3 text-white outline-none transition focus:border-brand-blue/70"
                placeholder="자세한 문의 내용을 입력해 주세요"
              />
            </label>

            <div className="flex flex-wrap items-center gap-3">
              <button
                type="submit"
                disabled={status === "loading"}
                className="rounded-full bg-brand-blue px-6 py-3 text-sm font-semibold text-black shadow-lg shadow-sky-500/20 transition hover:-translate-y-0.5 disabled:cursor-not-allowed disabled:opacity-60"
              >
                {status === "loading" ? "전송 중..." : "문의 전송하기"}
              </button>
              {status === "success" && <p className="text-sm text-emerald-400">전송되었습니다. 빠르게 연락드리겠습니다.</p>}
              {status === "error" && <p className="text-sm text-red-400">{errorMessage}</p>}
              {status === "idle" && <p className="text-sm text-gray-400">전송 시 내부 메일로 바로 전달됩니다.</p>}
            </div>
          </div>
        </form>

        <aside
          className="will-reveal space-y-6 rounded-3xl border border-white/10 bg-white/5 p-6 shadow-xl backdrop-blur"
          style={{ transitionDelay: "140ms" }}
        >
          <div className="space-y-2">
            <p className="text-sm font-semibold uppercase tracking-[0.2em] text-brand-blue">Info</p>
            <h3 className="text-xl font-bold">연결 가능한 채널</h3>
            <p className="text-gray-300">선호하는 방식으로 바로 연락주시면 전담 매니저가 응대합니다.</p>
          </div>
          <div className="space-y-4 text-sm">
            <div className="rounded-2xl border border-white/10 bg-black/30 p-4">
              <p className="text-gray-400">대표번호</p>
              <p className="text-lg font-semibold text-white">02-515-7002</p>
              <p className="text-gray-400">평일 10:00 - 18:00</p>
            </div>
            <div className="rounded-2xl border border-white/10 bg-black/30 p-4">
              <p className="text-gray-400">이메일</p>
              <p className="text-lg font-semibold text-white">account1@the-viral.co.kr</p>
              <p className="text-gray-400">24시간 이내 답변</p>
            </div>
            <div className="rounded-2xl border border-white/10 bg-black/30 p-4">
              <p className="text-gray-400">주소</p>
              <p className="text-lg font-semibold text-white">서울시 서초구 서초대로40길 91 동초빌딩 3F</p>
              <a
                href="https://map.naver.com/p/search/%EC%84%9C%EC%9A%B8%EC%8B%9C%20%EC%84%9C%EC%B4%88%EA%B5%AC%20%EC%84%9C%EC%B4%88%EB%8C%80%EB%A1%9C40%EA%B8%B8%2091%20%EB%8F%99%EC%B4%88%EB%B9%8C%EB%94%A9%203F/address/14138582.0596927,4507304.6768405,%EC%84%9C%EC%9A%B8%ED%8A%B9%EB%B3%84%EC%8B%9C%20%EC%84%9C%EC%B4%88%EA%B5%AC%20%EC%84%9C%EC%B4%88%EB%8C%80%EB%A1%9C40%EA%B8%B8%2091?c=15.00,0,0,0,dh&isCorrectAnswer=true"
                className="text-sm font-semibold text-brand-blue transition hover:text-white"
              >
                지도 열기 →
              </a>
            </div>
          </div>
          <div className="rounded-2xl border border-white/10 bg-gradient-to-br from-brand-blue/15 via-transparent to-white/10 p-5 text-sm shadow-lg">
            <p className="font-semibold text-white">긴급 이슈 대응</p>
            <p className="text-gray-300">언론 대응, 채널 모니터링 등 긴급 상황은 전화로 바로 연락주세요.</p>
          </div>
        </aside>
      </section>

      <Footer />
    </main>
  );
}
