"use client";

import React from "react";
import Image from "next/image";
import { Footer } from "@/components/Footer";
import { NavBar } from "@/components/NavBar";

const projects = [
  {
    title: "맛있는 두유 GT",
    category: "상위노출",
    image: "/img/viral_1_v2.jpg",
    href: "/work#exposure",
  },
  {
    title: "하이트 진로",
    category: "NEW MEDIA",
    image: "/img/viral_2_v2.jpg",
    href: "/work#new_media",
  },
  {
    title: "로게인폼",
    category: "연출 홍보",
    image: "/img/viral_3_v2.jpg",
    href: "/work#issue",
  },
  {
    title: "환경보전협회",
    category: "채널 운영",
    image: "/img/viral_4_v2.jpg",
    href: "/work#channel",
  },
  {
    title: "눅스",
    category: "NEW MEDIA",
    image: "/img/viral_5_v2.jpg",
    href: "/work#new_media",
  },
  {
    title: "애경",
    category: "체험단 운영",
    image: "/img/viral_6_v2.jpg",
    href: "/work#experience",
  },
];

const brandLogos = new Array(8).fill("/img/brand_logo.png");

const welfareHighlightKeywords = ["깔끔하고 협력적인", "조기퇴근 복지", "라면 기계", "펌프기계"];

const welfareQna = [
  {
    question: "어떤 점에서 우리 회사의 근무 환경이 다른가요?",
    name: "Olivia",
    role: "과장님",
    answer:
      "근무 환경이 매우 깔끔하고 협력적인 분위기가 조성되어 있어요. 편안하고 자유로운 오피스 스타일을 즐길 수 있다는 점이 가장 큰 장점입니다!",
  },
  {
    question: "명절 선물세트와 추가 복지 등의 의미는?",
    name: "Aiden",
    role: "사원님",
    answer:
      "부모님이 지방에 거주해 명절이되면 교통편 구하기 힘들었는데, 회사에서 제공하는 조기퇴근 복지 덕분에 편하게 본가를 방문할 수 있어요:)",
  },
  {
    question: "가장 만족하는 회사 휴게 시설은 무엇인가요?",
    name: "Lily",
    role: "팀장님",
    answer:
      "회사 휴게 공간에서 제공되는 라면 기계는 정말 만족스러워요. 최근에는 펌프기계가 설치돼서 업무 중에 스트레칭을 하며 긴장을 풀어주고 있어요~!",
  },
];

type IdentityItem = {
  key: "WHY" | "HOW" | "WHAT";
  title: string;
  descLines: string[];
};

const identityItems: IdentityItem[] = [
  {
    key: "WHY",
    title: "최상의 가치",
    descLines: ["더바이럴은 최상의", "바이럴 마케팅으로", "전 세계에 확산을 목표"],
  },
  {
    key: "HOW",
    title: "바이럴 과정",
    descLines: ["클라이언트가 업계 최고의", "리더가 될 수 있도록 전문적인", "바이럴 마케팅 전략 제공"],
  },
  {
    key: "WHAT",
    title: "타겟 맞춤형",
    descLines: ["타겟 대상의", "트렌드 맞춤형 광고", "서비스 신속 제공"],
  },
];

function WhyHowWhat() {
  return (
    <section className="w-full bg-white py-16 text-neutral-800">
      <div className="mx-auto max-w-6xl px-4">
        <div className="relative flex flex-col items-center md:flex-row md:justify-center">
          <div
            className="pointer-events-none absolute left-[-200vw] right-[-200vw] top-[180px] hidden h-[2px] bg-sky-400/70 identity-line md:block"
            aria-hidden="true"
          />

          {identityItems.map((it, idx) => {
            const isFirst = idx === 0;
            const overlapClass = idx === 0 ? "" : "md:-ml-24";
            const mobileShift = idx === 0 ? "" : "-mt-10 md:mt-0";

            return (
              <div
                key={it.key}
                className={`identity-item relative z-10 flex flex-col items-center ${mobileShift} ${overlapClass}`}
                style={{ animationDelay: `${idx * 120 + 200}ms` }}
              >
                <div className="circle-shell rounded-full bg-sky-100/70 p-7">
                  <div className="flex h-[320px] w-[320px] flex-col items-center justify-center rounded-full bg-white ring-1 ring-sky-400/70">
                    <div className="text-[56px] font-semibold tracking-wide text-sky-400">{it.key}</div>
                    <div className="mt-2 text-[22px] font-medium text-neutral-700">{it.title}</div>
                  </div>
                </div>

                <div className="-mt-6 flex flex-col items-center">
                  <div className="h-16 border-l border-dashed border-neutral-300" />
                  <div className="h-0 w-0 border-l-[10px] border-r-[10px] border-t-[14px] border-l-transparent border-r-transparent border-t-sky-400/80" />
                  <p
                    className={`mt-8 text-center text-[16px] leading-7 text-neutral-500 ${
                      isFirst ? "max-w-[260px]" : idx === 1 ? "max-w-[300px]" : "max-w-[290px]"
                    }`}
                  >
                    {it.descLines.map((line, i) => (
                      <React.Fragment key={i}>
                        {line}
                        {i < it.descLines.length - 1 ? <br /> : null}
                      </React.Fragment>
                    ))}
                  </p>
                </div>
              </div>
            );
          })}
        </div>

        <div className="mt-10 md:hidden">
          <div className="mx-auto h-[2px] w-full max-w-md bg-sky-400/70 identity-line" />
        </div>
      </div>

      <style jsx global>{`
        .identity-line {
          transform: scaleX(0);
          transform-origin: left;
          animation: grow-line 1.2s ease-out forwards;
        }
        .identity-item {
          opacity: 0;
          transform: translateY(12px);
          animation: fade-in-up 0.8s ease-out forwards;
        }
        .circle-shell {
          animation: pulse-soft 2.6s ease-in-out infinite;
        }
        @keyframes grow-line {
          0% { transform: scaleX(0); opacity: 0.2; }
          40% { opacity: 0.7; }
          100% { transform: scaleX(1); opacity: 1; }
        }
        @keyframes fade-in-up {
          from { opacity: 0; transform: translateY(12px); }
          to { opacity: 1; transform: translateY(0); }
        }
        @keyframes pulse-soft {
          0% { box-shadow: 0 0 0 0 rgba(56, 189, 248, 0.25); }
          60% { box-shadow: 0 0 0 16px rgba(56, 189, 248, 0); }
          100% { box-shadow: 0 0 0 0 rgba(56, 189, 248, 0); }
        }
      `}</style>
    </section>
  );
}

export default function Home() {
  return (
    <main className="space-y-24 pb-24">
      <NavBar />

      <section className="relative isolate overflow-hidden rounded-[32px] border border-white/5 bg-black px-0 py-0 shadow-2xl">
        <div className="relative h-[70vh] w-full overflow-hidden rounded-[32px]">
          <video
            className="absolute inset-0 h-full w-full object-cover"
            src="/img/video.webm"
            muted
            loop
            autoPlay
            playsInline
          />
        </div>
      </section>

      <section id="identity" className="mx-auto max-w-6xl px-6 space-y-10 scroll-mt-28">
        <header className="space-y-3">
          <p className="text-sm font-semibold uppercase tracking-[0.2em] text-brand-blue">Identity</p>
          <h2 className="text-3xl font-bold sm:text-4xl">더바이럴 아이덴티티</h2>
          <p className="text-gray-300">
            데이터 기반 퍼포먼스와 크리에이티브 실행력을 결합해 브랜드를 성장시키는 팀입니다.
          </p>
        </header>
        <WhyHowWhat />
      </section>

      <section id="project" className="mx-auto max-w-6xl px-6 space-y-10 scroll-mt-28">
        <header className="space-y-3">
          <p className="text-sm font-semibold uppercase tracking-[0.2em] text-brand-blue">Project</p>
          <h2 className="text-3xl font-bold sm:text-4xl">대표 프로젝트</h2>
        </header>
        <div className="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
          {projects.map((project) => (
            <article
              key={project.title}
              className="group relative overflow-hidden rounded-2xl border border-white/10 bg-white/5 shadow-xl transition hover:-translate-y-1 hover:shadow-2xl"
            >
              <div className="relative h-52 w-full overflow-hidden">
                <Image
                  src={project.image}
                  alt={project.title}
                  fill
                  sizes="(min-width: 1024px) 33vw, (min-width: 768px) 50vw, 100vw"
                  className="object-cover transition duration-500 group-hover:scale-105"
                />
              </div>
              <div className="flex items-center justify-between px-4 pb-4 pt-3">
                <div>
                  <p className="text-xs uppercase tracking-[0.18em] text-brand-blue">{project.category}</p>
                  <h3 className="text-lg font-semibold text-white">{project.title}</h3>
                </div>
                <a
                  href={project.href}
                  className="rounded-full border border-white/15 px-3 py-1 text-xs font-semibold text-white transition hover:border-brand-blue/60 hover:text-brand-blue"
                >
                  view
                </a>
              </div>
            </article>
          ))}
        </div>
        <div>
          <a
            href="../?page=work"
            className="inline-flex items-center gap-2 rounded-full border border-white/15 px-6 py-3 text-sm font-semibold text-white transition hover:-translate-y-0.5 hover:border-brand-blue/60 hover:text-brand-blue"
          >
            view more
          </a>
        </div>
      </section>

      <section id="with" className="mx-auto max-w-6xl px-6 space-y-10 scroll-mt-28">
        <header className="space-y-3">
          <p className="text-sm font-semibold uppercase tracking-[0.2em] text-brand-blue">With</p>
          <h2 className="text-3xl font-bold sm:text-4xl">협업 브랜드</h2>
        </header>
        <div className="overflow-hidden rounded-2xl border border-white/10 bg-white/5 py-6 shadow-xl">
          <div className="flex animate-marquee items-center gap-10">
            {brandLogos.map((logo, idx) => (
              <div key={`${logo}-${idx}`} className="shrink-0">
                <Image src={logo} alt="브랜드 로고" width={320} height={120} className="h-20 w-auto" />
              </div>
            ))}
            {brandLogos.map((logo, idx) => (
              <div key={`dupe-${logo}-${idx}`} className="shrink-0">
                <Image src={logo} alt="브랜드 로고" width={320} height={120} className="h-20 w-auto" />
              </div>
            ))}
          </div>
        </div>
      </section>

      <section id="welfare" className="mx-auto max-w-6xl px-6 space-y-10 scroll-mt-28">
        <header className="space-y-3">
          <p className="text-sm font-semibold uppercase tracking-[0.2em] text-brand-blue">Welfare</p>
          <h2 className="text-3xl font-bold sm:text-4xl">더바이럴 인터뷰</h2>
          <p className="text-gray-300">팀원들이 직접 전하는 복지 경험과 오피스 라이프.</p>
        </header>

        <div className="grid gap-6 md:grid-cols-3">
          {welfareQna.map((item, idx) => (
            <article
              key={item.question}
              className="flex h-full flex-col overflow-hidden rounded-2xl border border-white/10 bg-white/5 shadow-xl transition hover:-translate-y-1"
              style={{ transitionDelay: `${idx * 60}ms` }}
            >
              <header className="bg-black/40 px-5 py-3 text-sm font-semibold text-white">Q: {item.question}</header>
              <div className="flex flex-1 flex-col gap-4 px-5 py-5">
                <div className="flex items-center gap-3">
                  <div className="flex h-12 w-12 items-center justify-center rounded-full bg-gradient-to-br from-brand-blue/50 via-cyan-400/30 to-white/10 text-sm font-bold text-black shadow-inner">
                    {item.name.slice(0, 1)}
                  </div>
                  <div>
                    <p className="text-sm font-semibold text-white">{item.name}</p>
                    <p className="text-xs text-gray-400">{item.role}</p>
                  </div>
                </div>
                <div className="h-px w-full bg-white/10" />
                <p className="text-sm leading-relaxed text-gray-200">
                  {item.answer
                    .split(new RegExp(`(${welfareHighlightKeywords.join("|")})`, "g"))
                    .filter(Boolean)
                    .map((part, i) => {
                      const highlight = welfareHighlightKeywords.includes(part);
                      return (
                        <span key={`${part}-${i}`} className={highlight ? "text-brand-blue font-semibold" : undefined}>
                          {part}
                        </span>
                      );
                    })}
                </p>
              </div>
            </article>
          ))}
        </div>

        <div>
          <a
            href="/welfare"
            className="inline-flex items-center gap-2 rounded-full border border-white/15 px-6 py-3 text-sm font-semibold text-white transition hover:-translate-y-0.5 hover:border-brand-blue/60 hover:text-brand-blue"
          >
            view more
          </a>
        </div>
      </section>

      <section id="contact" className="mx-auto max-w-6xl px-6 scroll-mt-28">
        <div className="relative overflow-hidden rounded-[28px] border border-white/10 bg-gradient-to-br from-white/5 via-white/0 to-white/10 p-10 shadow-2xl">
          <div className="pointer-events-none absolute inset-0 opacity-60">
            <div className="absolute left-[-10%] top-[-30%] h-64 w-64 rounded-full bg-brand-blue/25 blur-3xl" />
            <div className="absolute right-[-10%] bottom-[-30%] h-72 w-72 rounded-full bg-cyan-400/20 blur-3xl" />
          </div>
          <div className="relative grid gap-6 md:grid-cols-[1.2fr_1fr] md:items-center">
            <div className="space-y-3">
              <p className="text-sm font-semibold uppercase tracking-[0.2em] text-brand-blue">Contact</p>
              <h2 className="text-3xl font-bold sm:text-4xl">대표번호 02-515-7002</h2>
              <p className="text-lg text-gray-200">AM 08:30 - PM 17:30 · 빠르게 연결되어 상담받아보세요.</p>
              <div className="flex flex-wrap gap-3 text-sm font-semibold">
                <a
                  href="/contact"
                  className="rounded-full bg-brand-blue px-6 py-3 text-black shadow-lg shadow-sky-500/20 transition hover:-translate-y-0.5"
                >
                  프로젝트 문의
                </a>
                <a
                  href="tel:025157002"
                  className="rounded-full border border-white/20 px-6 py-3 text-white transition hover:-translate-y-0.5 hover:border-brand-blue/60 hover:text-brand-blue"
                >
                  전화 연결
                </a>
                <a
                  href="mailto:account1@the-viral.co.kr"
                  className="rounded-full border border-white/20 px-6 py-3 text-white transition hover:-translate-y-0.5 hover:border-brand-blue/60 hover:text-brand-blue"
                >
                  이메일 문의
                </a>
              </div>
            </div>
            <div className="relative overflow-hidden rounded-2xl border border-white/10 bg-black/30 p-5 shadow-inner">
              <div className="flex items-center gap-3">
                <div className="h-10 w-10 rounded-full bg-brand-blue/30" />
                <div>
                  <p className="text-sm text-gray-300">서비스 문의</p>
                  <p className="text-lg font-semibold text-white">더바이럴 전담 매니저 배정</p>
                </div>
              </div>
              <div className="mt-4 grid grid-cols-2 gap-3 text-sm text-gray-300">
                <div className="rounded-xl border border-white/10 bg-white/5 p-3">
                  <p className="text-xs uppercase tracking-[0.16em] text-brand-blue">대표번호</p>
                  <p className="text-base font-semibold text-white">02-515-7002</p>
                </div>
                <div className="rounded-xl border border-white/10 bg-white/5 p-3">
                  <p className="text-xs uppercase tracking-[0.16em] text-brand-blue">이메일</p>
                  <p className="text-base font-semibold text-white">account1@the-viral.co.kr</p>
                </div>
                <div className="rounded-xl border border-white/10 bg-white/5 p-3">
                  <p className="text-xs uppercase tracking-[0.16em] text-brand-blue">주소</p>
                  <p className="text-base font-semibold text-white">서울 서초구 서초대로40길 91</p>
                </div>
                <div className="rounded-xl border border-white/10 bg-white/5 p-3">
                  <p className="text-xs uppercase tracking-[0.16em] text-brand-blue">상담 시간</p>
                  <p className="text-base font-semibold text-white">AM 08:30 - PM 17:30</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <Footer />
    </main>
  );
}
