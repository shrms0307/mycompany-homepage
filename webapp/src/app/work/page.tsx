"use client";

import Image from "next/image";
import { useEffect, useState } from "react";
import { Footer } from "@/components/Footer";
import { NavBar } from "@/components/NavBar";

type Step = {
  title: string;
  summary: string;
  details: string;
};

type CaseStudy = {
  brand: string;
  logo?: string;
  hero: string;
  steps: Step[];
  renderIcon?: () => JSX.Element;
};

type TimelineStep = {
  title: string;
  summary: string;
  details?: string;
};

const caseStudies: CaseStudy[] = [
  {
    brand: "맛있는 두유 GT",
    hero: "/img/work_ad1.jpg",
    renderIcon: () => (
      <div className="flex h-12 min-w-[140px] items-center justify-center gap-2 rounded-full bg-white px-3 text-xm font-bold uppercase tracking-[0.18em] text-[#0b162b] shadow-sm">
        <span className="h-2 w-2 rounded-full bg-brand-blue " />
        맛있는 두유 GT
      </div>
    ),
    steps: [
      {
        title: "스마트 블록 생성",
        summary: '"맛있는 두유 추천" 주제에서 상위 노출 달성',
        details:
          '"맛있는 두유 추천"을 주제로 스마트 블록을 생성하여 관련 키워드 검색 시 상위노출을 확보했습니다. 스마트 블록 활용으로 브랜드 인지도를 높였습니다.',
      },
      {
        title: "SEO 최적화",
        summary: "다수의 제품 관련 키워드로 전체 영역 상위 노출",
        details:
          '다양한 두유 키워드에 맞춘 SEO 최적화로 검색 영역 전반에서 높은 순위를 유지하며 트래픽과 판매량을 동시에 끌어올렸습니다.',
      },
      {
        title: "키워드 챌린지",
        summary: "인플루언서 협업을 통한 상위 등수 확보",
        details:
          '인플루언서와 협업해 키워드 챌린지에 참여, 다수의 상위 랭킹을 확보하며 타겟 소비자 접점을 확장했습니다.',
      },
    ],
  },
  {
    brand: "테이크핏 당케어",
    hero: "/img/work_ad5.png",
    renderIcon: () => (
      <div className="flex h-12 min-w-[140px] items-center justify-center gap-2 rounded-full bg-white px-3 text-xm font-bold uppercase tracking-[0.18em] text-[#0b162b] shadow-sm">
        <span className="h-2 w-2 rounded-full bg-brand-blue" />
        테이크핏 당케어
      </div>
    ),
    steps: [
      {
        title: "스마트 블록 생성",
        summary: '"테이크핏 당케어" 주제로 상위 노출 달성',
        details:
          '제품 주제에 맞춘 스마트 블록 생성으로 핵심 키워드 검색 시 상위노출을 확보하고 브랜드 인지도를 끌어올렸습니다.',
      },
      {
        title: "SEO 최적화",
        summary: "다수의 관련 키워드로 상위 노출 유지",
        details:
          '관련 키워드 전반을 커버하는 SEO 전략으로 트래픽과 전환을 높이고, 검색 결과 상위 노출을 안정적으로 유지했습니다.',
      },
      {
        title: "키워드 챌린지",
        summary: "인플루언서 협업으로 인기도 확보",
        details:
          '인플루언서 참여형 키워드 챌린지를 운영해 관심도를 높이고, 자연스러운 노출과 신뢰도를 함께 확보했습니다.',
      },
    ],
  },
];

const newMediaCases: CaseStudy[] = [
  {
    brand: "하이트진로 신제품",
    hero: "/img/media_jinro.png",
    renderIcon: () => (
      <div className="flex h-12 min-w-[140px] items-center justify-center gap-2 rounded-full bg-white px-3 text-xm font-bold uppercase tracking-[0.18em] text-[#0b162b] shadow-sm">
        <span className="h-2 w-2 rounded-full bg-brand-blue" />
        하이트진로 신제품 로고
      </div>
    ),
    steps: [
      {
        title: "인플루언서 마케팅",
        summary: "영향력 있는 인플루언서를 통해 관심과 인지도 증대",
        details:
          "전략적 인플루언서 협업으로 신제품과 팝업을 자연스럽게 노출해 대세감을 형성하고 인지도를 확대했습니다.",
      },
      {
        title: "SNS 파워 페이지 홍보",
        summary: "팔로워 많은 채널을 활용해 가시성 증대",
        details:
          "타겟이 많은 SNS 파워 페이지에서 집중 노출을 실행해 브랜드 인지도와 소비자 관심을 크게 높였습니다.",
      },
      {
        title: "네이티브 AD 홍보",
        summary: "공신력 있는 네이티브 AD 채널로 인지도 확장",
        details:
          "거부감 없는 네이티브 광고 포맷으로 제품을 소개해 신뢰도와 신규 소비자 유입을 동시에 확보했습니다.",
      },
    ],
  },
  {
    brand: "바닐라코",
    hero: "/img/media_banila.png",
    renderIcon: () => (
      <div className="flex h-12 min-w-[140px] items-center justify-center gap-2 rounded-full bg-white px-3 text-xm font-bold uppercase tracking-[0.18em] text-[#0b162b] shadow-sm">
        <span className="h-2 w-2 rounded-full bg-brand-blue" />
        바닐라코 로고
      </div>
    ),
    steps: [
      {
        title: "브랜드 주력 제품 리뷰",
        summary: "뷰티 파워블로거 협업으로 제품 특장점 전달",
        details:
          "전문 파워블로거와 협업해 사용법과 효과를 세밀히 소개, 신뢰성 있는 후기로 관심을 끌었습니다.",
      },
      {
        title: "할인 정보 안내",
        summary: "정기 프로모션 고지로 직접 구매 유도",
        details:
          "블로그와 SNS로 할인 기간과 쿠폰을 명확히 공지해 타겟 고객의 구매 결정을 밀어붙였습니다.",
      },
      {
        title: "경쟁 키워드 점유",
        summary: "SEO 적용으로 '톤업크림' 등 핵심 키워드 상위노출",
        details:
          "경쟁 키워드를 촘촘히 반영한 콘텐츠로 검색 상위를 확보하고 블로그 유입과 전환을 높였습니다.",
      },
    ],
  },
  {
    brand: "프로바이오틱스 얼티밋",
    hero: "/img/media_insta.jpg",
    renderIcon: () => (
      <div className="flex h-12 min-w-[140px] items-center justify-center gap-2 rounded-full bg-white px-3 text-xm font-bold uppercase tracking-[0.18em] text-[#0b162b] shadow-sm">
        <span className="h-2 w-2 rounded-full bg-brand-blue" />
        인스타그램 프로바이오틱스 얼티밋
      </div>
    ),
    steps: [
      {
        title: "브랜드 신제품 리뷰",
        summary: "2030 라이프스타일 인플루언서로 대세감 조성",
        details:
          "일상 속 자연스러운 노출로 제품 특장점을 강조하며 젊은 타겟의 호기심과 관심을 모았습니다.",
      },
      {
        title: "디테일한 제품 소개",
        summary: "직접 복용 후기로 신뢰도 확보",
        details:
          "제품 정보를 명확히 설명하고 복용 후기를 공유해 효능에 대한 신뢰를 높였습니다.",
      },
      {
        title: "제품 사전 홍보",
        summary: "출시 전 기대감을 올려 초기 판매 견인",
        details:
          "출시 전에 인플루언서 콘텐츠로 궁금증을 자극해 출시 당일 구매로 이어지도록 설계했습니다.",
      },
    ],
  },
  {
    brand: "눅스",
    hero: "/img/media_blog.png",
    renderIcon: () => (
      <div className="flex h-12 min-w-[140px] items-center justify-center gap-2 rounded-full bg-white px-3 text-xm font-bold uppercase tracking-[0.18em] text-[#0b162b] shadow-sm">
        <span className="h-2 w-2 rounded-full bg-brand-blue" />
        블로그 눅스
      </div>
    ),
    steps: [
      {
        title: "뷰티 전문 파워블로거",
        summary: "전문성 기반 신뢰도 확보",
        details:
          "신뢰도 높은 뷰티 블로거를 선정해 리뷰를 진행, 브랜드 호감과 관심을 동시에 끌어올렸습니다.",
      },
      {
        title: "브랜드 제공 정보 언급",
        summary: "성분·사용법 등 디테일한 정보 전달",
        details:
          "브랜드 제공 정보를 정확히 명시하고 실사용 후기를 더해 제품 이해도를 높였습니다.",
      },
      {
        title: "경쟁 키워드 점유",
        summary: "'멀티오일' 등 핵심 키워드 상위노출",
        details:
          "SEO 최적화로 경쟁 키워드 상위를 확보해 리뷰 가시성과 트래픽을 확장했습니다.",
      },
    ],
  },
];

const issueTimeline: TimelineStep[] = [
  { title: "부정 이슈 발생", summary: "브랜드 키워드 검색 시 부정 컨텐츠 확인" },
  { title: "대응 방안 모색", summary: "탈모 광고 식약처 신고 제시 및 실행" },
  {
    title: "대응",
    summary: "관련 게시글 삭제 처리 및 기사화",
    details: "https://www.fnnews.com/news/202211081445571026",
  },
  { title: "상황 종료", summary: "총 703건 삭제 및 비공개 처리 완료" },
];

const channelCases: CaseStudy[] = [
  {
    brand: "층간소음 예방 캠페인",
    hero: "/img/business.png",
    renderIcon: () => (
      <div className="flex h-12 min-w-[140px] items-center justify-center gap-2 rounded-full bg-white px-3 text-xm font-bold uppercase tracking-[0.18em] text-[#0b162b] shadow-sm">
        <span className="h-2 w-2 rounded-full bg-brand-blue" />
        층간소음 예방 캠페인 로고
      </div>
    ),
    steps: [
      {
        title: "SNS 관리",
        summary: "층간소음 예방 인식 제고를 위한 인스타 운영",
        details:
          "전용 계정을 개설해 콘텐츠를 꾸준히 발행하고 해시태그·소통으로 팔로워 참여를 끌어올렸습니다.",
      },
      {
        title: "온라인 이벤트",
        summary: "다양한 이벤트로 참여와 커뮤니티 강화",
        details:
          "목적별 이벤트를 기획·운영하며 실시간 상호작용과 사후 피드백까지 관리해 충성도를 높였습니다.",
      },
    ],
  },
];

const experienceSteps: TimelineStep[] = [
  { title: "체험단 운영", summary: "AK LOVER 체험단 운영" },
  { title: "홈페이지 운영", summary: "홈페이지 운영 및 브랜드 이벤트 업데이트" },
  { title: "SNS 관리", summary: "소셜미디어 인지도 향상 및 소통 강화" },
  { title: "온/오프라인 이벤트", summary: "성공적인 온·오프라인 이벤트 운영" },
];

const tabs = [
  { id: "exposure", label: "상위노출" },
  { id: "new_media", label: "NEW MEDIA" },
  { id: "issue", label: "부정이슈 관리" },
  { id: "channel", label: "채널 운영" },
  { id: "experience", label: "체험단 운영" },
];

export default function WorkPage() {
  const [openStep, setOpenStep] = useState<{ [brand: string]: number | null }>({});
  const [activeTab, setActiveTab] = useState<string>("exposure");
  const [issuePreview, setIssuePreview] = useState(0);
  const [experiencePreview, setExperiencePreview] = useState(0);

  useEffect(() => {
    const ids = tabs.map((t) => t.id);
    const setFromHash = () => {
      const hash = typeof window !== "undefined" ? window.location.hash.replace("#", "") : "";
      if (ids.includes(hash)) {
        setActiveTab(hash);
      }
    };
    setFromHash();
    window.addEventListener("hashchange", setFromHash);
    return () => window.removeEventListener("hashchange", setFromHash);
  }, []);

  useEffect(() => {
    const elements = Array.from(document.querySelectorAll<HTMLElement>("[data-reveal]"));
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
  }, [activeTab]);

  const toggleStep = (brand: string, idx: number) => {
    setOpenStep((prev) => ({ ...prev, [brand]: prev[brand] === idx ? null : idx }));
  };

  const renderCaseSection = (title: string, kicker: string, description: string, cases: CaseStudy[]) => (
    <section className="mx-auto max-w-6xl space-y-12 px-6">
      <header className="will-reveal space-y-3 text-center" data-reveal>
        <p className="text-sm font-semibold uppercase tracking-[0.2em] text-brand-blue">{kicker}</p>
        <h1 className="text-3xl font-bold text-white sm:text-4xl">{title}</h1>
        <p className="text-gray-300">{description}</p>
      </header>

      <div className="space-y-12">
        {cases.map((cs) => (
          <article
            key={cs.brand}
            className="will-reveal grid gap-8 rounded-3xl border border-white/10 bg-white/5 p-6 shadow-xl md:grid-cols-2"
            data-reveal
          >
            <div className="flex flex-col gap-6">
              <div className="flex items-center gap-3">
                {cs.renderIcon ? (
                  cs.renderIcon()
                ) : (
                  <Image src={cs.logo ?? ""} alt={`${cs.brand} 로고`} width={160} height={60} className="h-12 w-auto" />
                )}
                {/* <div className="text-lg font-semibold text-white">{cs.brand}</div> */}
              </div>
              <div className="space-y-4">
                {cs.steps.map((step, idx) => {
                  const opened = openStep[cs.brand] === idx;
                  return (
                    <div
                      key={step.title}
                      className="rounded-2xl border border-white/10 bg-black/30 p-4 shadow-sm"
                    >
                      <div className="flex items-start justify-between gap-4">
                        <div>
                          <p className="text-xs uppercase tracking-[0.18em] text-brand-blue">STEP {idx + 1}</p>
                          <h3 className="text-lg font-semibold text-white">{step.title}</h3>
                          <p className="text-sm text-gray-300">{step.summary}</p>
                        </div>
                        <button
                          type="button"
                          onClick={() => toggleStep(cs.brand, idx)}
                          className="h-9 w-9 shrink-0 rounded-full border border-white/15 text-white transition hover:border-brand-blue/60 hover:text-brand-blue focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-brand-blue"
                          aria-expanded={opened}
                        >
                          {opened ? "−" : "+"}
                        </button>
                      </div>
                      {opened && (
                        <p className="mt-3 text-sm leading-relaxed text-gray-300">
                          {step.details ?? step.summary}
                        </p>
                      )}
                    </div>
                  );
                })}
              </div>
            </div>

            <div className="relative h-full min-h-[320px] overflow-hidden rounded-2xl border border-white/10 bg-black/40">
              <Image
                src={cs.hero}
                alt={`${cs.brand} 작업 이미지`}
                fill
                sizes="(min-width: 1024px) 50vw, 100vw"
                className="object-cover"
              />
            </div>
          </article>
        ))}
      </div>
    </section>
  );

  const renderIssueSection = () => {
    const issueImages = ["/img/issuse_tarmo.jpg", "/img/issuse_answer.jpg", "/img/issuse_news.jpg"];
    return (
      <section className="mx-auto max-w-6xl space-y-10 px-6">
        <header className="will-reveal space-y-3 text-center" data-reveal>
          <p className="text-sm font-semibold uppercase tracking-[0.2em] text-brand-blue">Crisis Response</p>
          <h1 className="text-3xl font-bold text-white sm:text-4xl">부정이슈 관리 프로세스</h1>
          <p className="text-gray-300">2021.02.16 ~ 2024.03.14 · 총 703건 삭제/비공개 처리 완료</p>
        </header>

        <div className="grid gap-8 lg:grid-cols-[1.1fr_0.9fr]">
          <div className="space-y-4">
            {issueTimeline.map((step, idx) => (
              <div
                key={step.title}
                className="will-reveal group flex gap-4 rounded-2xl border border-white/10 bg-white/5 p-4 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-brand-blue/60 hover:bg-white/10 hover:shadow-lg hover:shadow-brand-blue/15"
                data-reveal
                onMouseEnter={() => setIssuePreview(Math.min(idx, issueImages.length - 1))}
                onFocus={() => setIssuePreview(Math.min(idx, issueImages.length - 1))}
              >
                <div className="mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-brand-blue/10 text-sm font-bold text-brand-blue">
                  {idx + 1}
                </div>
                <div>
                  <p className="text-xs uppercase tracking-[0.18em] text-brand-blue">STEP {idx + 1}</p>
                  <h3 className="text-lg font-semibold text-white">{step.title}</h3>
                  <p className="text-sm text-gray-300">{step.summary}</p>
                  {step.details && (
                    <p className="mt-1 text-xs text-gray-500">{step.details}</p>
                  )}
                </div>
              </div>
            ))}
          </div>

          <div className="will-reveal space-y-3" data-reveal>
            <div className="relative h-64 overflow-hidden rounded-3xl border border-white/10 bg-black/30 shadow-inner sm:h-72">
              <Image
                src={issueImages[issuePreview]}
                alt="이슈 대응 이미지"
                fill
                className="object-cover"
                sizes="(min-width: 640px) 50vw, 100vw"
              />
            </div>
            <div className="grid grid-cols-3 gap-2">
              {issueImages.map((src, i) => (
                <button
                  key={src}
                  type="button"
                  onMouseEnter={() => setIssuePreview(i)}
                  onFocus={() => setIssuePreview(i)}
                  className={`relative h-20 overflow-hidden rounded-xl border transition ${
                    issuePreview === i ? "border-brand-blue/70" : "border-white/10 hover:border-white/20"
                  }`}
                  aria-label="이슈 썸네일"
                >
                  <Image src={src} alt="이슈 대응 썸네일" fill className="object-cover" sizes="120px" />
                </button>
              ))}
            </div>
          </div>
        </div>
      </section>
    );
  };

  const renderExperienceSection = () => {
    const experienceImages = [
      "/img/exprience_i1.png",
      "/img/exprience_i2.png",
      "/img/exprience_i3.png",
      "/img/exprience_i4.png",
    ];

    return (
      <section className="mx-auto max-w-6xl space-y-10 px-6">
        <header className="will-reveal space-y-3 text-center" data-reveal>
          <p className="text-sm font-semibold uppercase tracking-[0.2em] text-brand-blue">Experience</p>
          <h1 className="text-3xl font-bold text-white sm:text-4xl">체험단 운영 사례</h1>
          <p className="text-gray-300">AK LOVER 서포터즈를 연간 운영하며 홈페이지, SNS, 온·오프라인 이벤트를 통합 진행했습니다.</p>
        </header>

        <div className="grid gap-8 lg:grid-cols-[1.05fr_0.95fr]">
          <div className="space-y-4">
            {experienceSteps.map((step, idx) => (
              <div
                key={step.title}
                className="will-reveal group flex gap-4 rounded-2xl border border-white/10 bg-white/5 p-4 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-brand-blue/60 hover:bg-white/10 hover:shadow-lg hover:shadow-brand-blue/15"
                data-reveal
                onMouseEnter={() => setExperiencePreview(Math.min(idx, experienceImages.length - 1))}
                onFocus={() => setExperiencePreview(Math.min(idx, experienceImages.length - 1))}
              >
                <div className="mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-brand-blue/10 text-sm font-bold text-brand-blue">
                  {idx + 1}
                </div>
                <div>
                  <p className="text-xs uppercase tracking-[0.18em] text-brand-blue">STEP {idx + 1}</p>
                  <h3 className="text-lg font-semibold text-white">{step.title}</h3>
                  <p className="text-sm text-gray-300">{step.summary}</p>
                </div>
              </div>
            ))}
          </div>

          <div className="will-reveal space-y-3" data-reveal>
            <div className="relative h-64 overflow-hidden rounded-3xl border border-white/10 bg-black/30 shadow-inner sm:h-72">
              <Image
                src={experienceImages[experiencePreview]}
                alt="체험단 운영 이미지"
                fill
                className="object-cover"
                sizes="(min-width: 640px) 50vw, 100vw"
              />
            </div>
            <div className="grid grid-cols-4 gap-2 sm:grid-cols-4">
              {experienceImages.map((src, i) => (
                <button
                  key={src}
                  type="button"
                  onMouseEnter={() => setExperiencePreview(i)}
                  onFocus={() => setExperiencePreview(i)}
                  className={`relative h-20 overflow-hidden rounded-xl border ${
                    experiencePreview === i ? "border-brand-blue/70" : "border-white/10"
                  }`}
                  aria-label="체험단 썸네일"
                >
                  <Image src={src} alt="체험단 운영 썸네일" fill className="object-cover" sizes="120px" />
                </button>
              ))}
            </div>
          </div>
        </div>
      </section>
    );
  };

  return (
    <main className="space-y-16 pb-20">
      <NavBar />
      <section className="relative isolate overflow-hidden rounded-[32px] border border-white/5 bg-black shadow-2xl">
        <div className="relative h-[60vh] w-full overflow-hidden rounded-[32px]">
          <Image
            src="/img/h_WORK.PNG"
            alt="Work Hero"
            fill
            priority
            className="object-cover"
            sizes="100vw"
          />
          <div className="absolute inset-0 bg-gradient-to-b from-black/80 via-black/50 to-black/80" />
          <div className="absolute inset-0 flex items-center justify-center">
            <p className="animate-float-slow text-5xl font-semibold tracking-[0.25em] text-white">WORK</p>
          </div>
        </div>
      </section>
      <section className="mx-auto max-w-6xl px-6">
        <div className="relative">
          {tabs.map((tab) => (
            <span key={tab.id} id={tab.id} className="absolute -top-24 block h-px w-px opacity-0" aria-hidden />
          ))}
        </div>
        <div className="flex flex-wrap justify-center gap-3 rounded-full border border-white/10 bg-white/5 p-2">
          {tabs.map((tab) => {
            const active = activeTab === tab.id;
            return (
              <button
                key={tab.id}
                type="button"
                onClick={() => setActiveTab(tab.id)}
                className={`rounded-full px-4 py-2 text-sm font-semibold transition focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-brand-blue ${
                  active ? "bg-brand-blue text-black shadow" : "text-gray-200 hover:text-white"
                }`}
              >
                {tab.label}
              </button>
            );
          })}
        </div>
      </section>

      {activeTab === "exposure" &&
        renderCaseSection(
          "상위노출 사례",
          "Performance",
          "스마트 블록, SEO, 키워드 챌린지를 활용한 대표 퍼포먼스 사례를 정리했습니다.",
          caseStudies
        )}

      {activeTab === "new_media" &&
        renderCaseSection(
          "NEW MEDIA 사례",
          "New Media",
          "인플루언서·파워 페이지·네이티브 AD를 활용한 입체적인 노출 전략입니다.",
          newMediaCases
        )}

      {activeTab === "issue" && renderIssueSection()}

      {activeTab === "channel" &&
        renderCaseSection(
          "채널 운영 사례",
          "Channel Ops",
          "SNS 운영부터 이벤트까지, 채널 성과를 높인 사례를 소개합니다.",
          channelCases
        )}

      {activeTab === "experience" && renderExperienceSection()}
      <Footer />
    </main>
  );
}