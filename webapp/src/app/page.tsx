import Image from "next/image";

const projects = [
  {
    title: "맛있는 두유 GT",
    category: "상위노출",
    image: "/img/viral_1_v2.jpg",
    href: "#work",
  },
  {
    title: "하이트 진로",
    category: "NEW MEDIA",
    image: "/img/viral_2_v2.jpg",
    href: "#new-media",
  },
  {
    title: "로게인폼",
    category: "연출 홍보",
    image: "/img/viral_3_v2.jpg",
    href: "#marketing",
  },
  {
    title: "환경보전협회",
    category: "채널 운영",
    image: "/img/viral_4_v2.jpg",
    href: "#channel",
  },
  {
    title: "눅스",
    category: "NEW MEDIA",
    image: "/img/viral_5_v2.jpg",
    href: "#new-media",
  },
  {
    title: "애경",
    category: "체험단 운영",
    image: "/img/viral_6_v2.jpg",
    href: "#experience",
  },
];

const brandLogos = new Array(8).fill("/img/brand_logo.png");

export default function Home() {
  return (
    <main className="space-y-24 pb-24">
      <section className="relative isolate overflow-hidden rounded-[32px] border border-white/5 bg-gradient-to-br from-[#0b162b] via-[#0b1221] to-[#05070e] px-6 py-16 shadow-2xl">
        <div className="absolute inset-0 overflow-hidden rounded-[32px]">
          <video
            className="absolute inset-0 h-full w-full object-cover"
            src="/img/video.webm"
            muted
            loop
            autoPlay
            playsInline
          />
          <div className="absolute inset-0 bg-gradient-to-b from-black/65 via-black/60 to-[#05070e]" />
        </div>
        <div className="relative mx-auto flex max-w-6xl flex-col gap-10 text-left">
          <div className="inline-flex w-fit items-center gap-2 rounded-full bg-white/10 px-4 py-2 text-sm font-medium text-sky-200 shadow-lg ring-1 ring-white/10">
            <span className="h-2 w-2 rounded-full bg-brand-blue" />
            THE VIRAL · Integrated Marketing Studio
          </div>
          <div className="space-y-6">
            <p className="text-lg text-gray-200">Identity · Project · Collaboration</p>
            <h1 className="text-4xl font-semibold leading-tight text-white sm:text-5xl md:text-6xl">
              브랜드의 이야기를 설계하고<br />
              사람들의 행동을 움직이는 캠페인을 만듭니다.
            </h1>
            <p className="max-w-2xl text-lg text-gray-200">
              바이럴, 뉴미디어, 채널 운영, 체험단까지. 데이터와 크리에이티브를 결합한 풀스택 마케팅을 제공합니다.
            </p>
          </div>
          <div className="flex flex-wrap gap-3">
            <a
              href="#project"
              className="rounded-full bg-brand-blue px-6 py-3 text-sm font-semibold text-black shadow-lg shadow-sky-500/30 transition hover:-translate-y-0.5 hover:shadow-xl"
            >
              프로젝트 보기
            </a>
            <a
              href="#identity"
              className="rounded-full border border-white/15 px-6 py-3 text-sm font-semibold text-white transition hover:-translate-y-0.5 hover:border-brand-blue/60 hover:text-brand-blue"
            >
              아이덴티티
            </a>
          </div>
        </div>
      </section>

      <section id="identity" className="mx-auto max-w-6xl px-6 space-y-10">
        <header className="space-y-3">
          <p className="text-sm font-semibold uppercase tracking-[0.2em] text-brand-blue">Identity</p>
          <h2 className="text-3xl font-bold sm:text-4xl">더바이럴 아이덴티티</h2>
          <p className="text-gray-300">
            데이터 기반 퍼포먼스와 크리에이티브 실행력을 결합해 브랜드를 성장시키는 팀입니다.
          </p>
        </header>
        <div className="overflow-hidden rounded-2xl border border-white/10 bg-white/5 shadow-xl">
          <Image
            src="/img/identity.jpg"
            alt="더바이럴 아이덴티티"
            width={1600}
            height={900}
            className="h-auto w-full"
            priority
          />
        </div>
        <div className="flex flex-wrap gap-3">
          <span className="rounded-full border border-white/10 px-4 py-2 text-sm text-gray-200">WHY · HOW · WHAT</span>
          <span className="rounded-full border border-white/10 px-4 py-2 text-sm text-gray-200">데이터 & 크리에이티브</span>
          <span className="rounded-full border border-white/10 px-4 py-2 text-sm text-gray-200">End-to-End 실행</span>
        </div>
        <div>
          <a
            href="../?page=company"
            className="inline-flex items-center gap-2 rounded-full bg-brand-blue px-6 py-3 text-sm font-semibold text-black shadow-lg shadow-sky-500/30 transition hover:-translate-y-0.5 hover:shadow-xl"
          >
            view more
          </a>
        </div>
      </section>

      <section id="project" className="mx-auto max-w-6xl px-6 space-y-10">
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

      <section id="with" className="mx-auto max-w-6xl px-6 space-y-10">
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
    </main>
  );
}
