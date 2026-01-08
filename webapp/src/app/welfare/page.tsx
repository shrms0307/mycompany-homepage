"use client";

import Image from "next/image";
import Link from "next/link";
import { useEffect, useState } from "react";
import { Footer } from "@/components/Footer";
import { NavBar } from "@/components/NavBar";

const processSteps = [
  {
    title: "서류전형",
    image: "/img/Welfare_1.png",
    label: "STEP.01",
  },
  {
    title: "1차면접",
    image: "/img/Welfare_2.png",
    label: "STEP.02",
  },
  {
    title: "최종합격",
    image: "/img/Welfare_4.png",
    label: "STEP.03",
  },
];

const facilities = [
  {
    id: "01",
    title: "직장에서의 새로운 경험, 새로운 공간",
    description:
      "깔끔한 사무실과 회의실, 음악이 흐르는 자유로운 분위기에서 근무합니다.",
    slides: ["/img/welfare_ad1_v2.jpg", "/img/welfare_ad_m11.jpg"],
  },
  {
    id: "02",
    title: "일하는 즐거움, 특별한 보상",
    description: "명절 선물·조기 퇴근, 생일 케이크와 기프트콘으로 동료들을 챙깁니다.",
    slides: ["/img/welfare_ad2_v2.jpg", "/img/welfare_ad_gift.jpg"],
  },
  {
    id: "03",
    title: "휴식과 창의적인 환경",
    description: "게임 시설·휴게 공간, 사내 카페와 간식으로 컨디션을 지원합니다.",
    slides: ["/img/welfare_ad3_v2.jpg", "/img/welfare_ad_m33.jpg"],
  },
];

export default function WelfarePage() {
  const [typedHeadline, setTypedHeadline] = useState("");
  const [currentSlide, setCurrentSlide] = useState<Record<string, number>>(() =>
    facilities.reduce((acc, f) => ({ ...acc, [f.id]: 0 }), {} as Record<string, number>)
  );

  useEffect(() => {
    const head = "더바이럴의 시설 및 복지";
    let j = 0;
    const t2 = setInterval(() => {
      setTypedHeadline(head.slice(0, j + 1));
      j += 1;
      if (j >= head.length) clearInterval(t2);
    }, 60);
    return () => {
      clearInterval(t2);
    };
  }, []);

  useEffect(() => {
    const elements = Array.from(document.querySelectorAll<HTMLElement>("[data-reveal]")).filter((el) => el.offsetParent !== null);
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("is-visible");
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.2 }
    );
    elements.forEach((el) => observer.observe(el));
    return () => observer.disconnect();
  }, []);

  return (
    <main className="space-y-16 pb-20">
      <NavBar />

      <section className="relative isolate overflow-hidden rounded-[32px] border border-white/5 bg-black shadow-2xl">
        <div className="relative h-[60vh] w-full overflow-hidden rounded-[32px]">
          <Image
            src="/img/h_WELFARE.PNG"
            alt="Welfare Hero"
            fill
            priority
            className="object-cover"
            sizes="100vw"
          />
          <div className="absolute inset-0 bg-gradient-to-b from-black/80 via-black/40 to-black/80" />
          <div className="absolute inset-0 flex items-center justify-center">
            <p className="animate-float-slow text-5xl font-semibold tracking-[0.25em] text-white">WELFARE</p>
          </div>
        </div>
      </section>

      <section className="mx-auto max-w-6xl space-y-12 px-6">
        <div className="will-reveal space-y-3 text-center" data-reveal>
          <p className="text-sm font-semibold uppercase tracking-[0.18em] text-brand-blue">Recruiting</p>
          <h1 className="text-3xl font-bold text-white sm:text-4xl">
            {typedHeadline || "더바이럴의 시설 및 복지"}
          </h1>
          <p className="text-gray-300">더바이럴과 함께 성장할 인재를 기다립니다.</p>
        </div>

        <div className="grid gap-6 md:grid-cols-3">
          {processSteps.map((step, idx) => (
            <div
              key={step.title}
              className="will-reveal flex flex-col items-center gap-3 rounded-2xl border border-white/10 bg-white/5 p-6 text-center shadow-lg"
              data-reveal
              style={{ transitionDelay: `${idx * 80}ms` }}
            >
              <div className="relative h-32 w-full overflow-hidden rounded-xl bg-black/20">
                <Image src={step.image} alt={step.title} fill className="object-contain" sizes="200px" />
              </div>
              <div className="text-xs font-semibold uppercase tracking-[0.14em] text-brand-blue">{step.label}</div>
              <div className="text-lg font-bold text-white">{step.title}</div>
            </div>
          ))}
        </div>

        <div className="will-reveal text-center text-sm text-gray-300" data-reveal>
          자세한 지원 문의는 대표번호 02-515-7002 또는 account1@the-viral.co.kr 로 연락주세요.
          <div className="mt-4">
            <Link
              href="https://www.saramin.co.kr/zf_user/jobs/relay/view?isMypage=no&rec_idx=48593191&recommend_ids=eJxNkMkNwzAMBKvJn8dyxX2nEPffRWQHEP0cDHcACZ2QFFc7P%2BuLZsiMlywehLpl29qDJZYNZjTVB%2Fe6Q2ebW6%2Fc1v%2FlDAs7trYWppwN6ByDxsop%2BwLjYFDumONkMF8pW5UvC1UMYsEmRa%2F9iNl6y18oRPr9OT97N0BS&view_type=search&searchword=%EB%8D%94%EB%B0%94%EC%9D%B4%EB%9F%B4&searchType=search&gz=1&t_ref_content=generic&t_ref=search&relayNonce=4aa02f0a5be24a6b7081&paid_fl=n&search_uuid=230bcde9-d528-4426-b60a-992b1eca485c&immediately_apply_layer_open=n#seq=0"
              target="_blank"
              rel="noreferrer"
              className="inline-flex items-center gap-2 rounded-full bg-brand-blue px-5 py-2 text-sm font-semibold text-black shadow hover:opacity-90"
            >
              입사 지원하기
            </Link>
          </div>
        </div>
      </section>

      <section className="mx-auto max-w-6xl space-y-10 px-6">
        <div className="will-reveal space-y-3 text-center" data-reveal>
          <p className="text-sm font-semibold uppercase tracking-[0.18em] text-brand-blue">Benefits</p>
          <h2 className="text-3xl font-bold text-white sm:text-4xl">시설 및 복지</h2>
          <p className="text-gray-300">우리의 공간과 문화를 슬라이드로 확인하세요.</p>
        </div>

        <div className="grid gap-8">
          {facilities.map((item, idx) => (
            <div
              key={item.id}
              className="will-reveal overflow-hidden rounded-3xl border border-white/10 bg-white/5 shadow-xl lg:grid lg:grid-cols-[1.2fr_0.8fr]"
              data-reveal
              style={{ transitionDelay: `${idx * 100}ms` }}
            >
              <div className="relative min-h-[280px] w-full overflow-hidden bg-black/20">
                <div className="absolute inset-0 flex animate-float-slow items-center justify-center opacity-60">
                  <div className="h-40 w-40 rounded-full bg-gradient-to-tr from-brand-blue/30 via-white/10 to-transparent blur-3xl" />
                </div>
                <div className="absolute inset-0">
                  <Image
                    src={item.slides[currentSlide[item.id] ?? 0]}
                    alt={item.title}
                    fill
                    className="object-cover transition duration-500"
                    sizes="(min-width: 1024px) 60vw, 100vw"
                    priority={idx === 0}
                  />
                  <button
                    type="button"
                    onClick={() =>
                      setCurrentSlide((prev) => {
                        const next = ((prev[item.id] ?? 0) - 1 + item.slides.length) % item.slides.length;
                        return { ...prev, [item.id]: next };
                      })
                    }
                    className="peer/prev absolute inset-y-0 left-0 w-1/3 cursor-pointer text-transparent focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white"
                    aria-label="이전 이미지"
                  />
                  <div className="pointer-events-none absolute inset-y-0 left-0 w-3/4 bg-gradient-to-r from-black/50 via-black/0 to-transparent opacity-0 transition duration-200 peer-hover/prev:opacity-80" />
                  <button
                    type="button"
                    onClick={() =>
                      setCurrentSlide((prev) => {
                        const next = ((prev[item.id] ?? 0) + 1) % item.slides.length;
                        return { ...prev, [item.id]: next };
                      })
                    }
                    className="peer/next absolute inset-y-0 right-0 w-1/3 cursor-pointer text-transparent focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white"
                    aria-label="다음 이미지"
                  />
                  <div className="pointer-events-none absolute inset-y-0 right-0 w-3/4 bg-gradient-to-l from-black/50 via-black/0 to-transparent opacity-0 transition duration-200 peer-hover/next:opacity-80" />
                </div>
              </div>
              <div className="flex flex-col gap-3 p-6 lg:p-8">
                <p className="text-sm font-semibold uppercase tracking-[0.14em] text-brand-blue">{item.id}</p>
                <h3 className="text-2xl font-bold text-white">{item.title}</h3>
                <p className="text-gray-300">{item.description}</p>
                <div className="flex gap-3">
                  {item.slides.map((slide, sIdx) => (
                    <button
                      key={slide}
                      type="button"
                      onClick={() => setCurrentSlide((prev) => ({ ...prev, [item.id]: sIdx }))}
                      className={`relative h-14 w-20 overflow-hidden rounded-xl border bg-black/30 transition ${
                        (currentSlide[item.id] ?? 0) === sIdx ? "border-brand-blue/70" : "border-white/10 hover:border-white/30"
                      }`}
                      aria-label={`${item.title} 썸네일 ${sIdx + 1}`}
                    >
                      <Image src={slide} alt="thumb" fill className="object-cover" sizes="120px" />
                    </button>
                  ))}
                </div>
              </div>
            </div>
          ))}
        </div>
      </section>

      <Footer />
    </main>
  );
}
