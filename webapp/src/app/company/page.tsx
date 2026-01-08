"use client";

import Image from "next/image";
import Link from "next/link";
import { useEffect, useState } from "react";
import { Footer } from "@/components/Footer";
import { NavBar } from "@/components/NavBar";

type NewsItem = {
  title: string;
  date: string;
  image: string;
  link: string;
  badge?: string;
};

const newsItems: NewsItem[] = [
  {
    title: "[보도자료] 2023 서비스만족대상 더바이럴, AI 시대에 맞춘 디지털일자리 창출 플랫폼",
    date: "2023-03-29",
    image: "/img/company_news3.jpg",
    link: "https://www.hankookilbo.com/News/Read/A2023032809320005263",
    badge: "보도자료",
  },
  {
    title: "[보도자료] 더바이럴, 이미지 촬영 크라우드 워커 모집",
    date: "2022-05-27",
    image: "/img/company_news1.jpg",
    link: "https://www.epnc.co.kr/news/articleView.html?idxno=223764",
    badge: "보도자료",
  },
  {
    title: "[보도자료] \"한국인들 일상생활 어떤 모습일까\" 대규모 학습용 데이터 구축",
    date: "2021-07-26",
    image: "/img/company_news4.jpg",
    link: "https://www.hankookilbo.com/News/Read/A2023032809320005263",
    badge: "보도자료",
  },
  {
    title: "[보도자료] 더바이럴, 일상생활 영상 데이터 크라우드워커 모집",
    date: "2021-07-16",
    image: "/img/company_news2.jpg",
    link: "https://www.epnc.co.kr/news/articleView.html?idxno=212379",
    badge: "보도자료",
  },
];

export default function CompanyPage() {
  const [typedNews, setTypedNews] = useState("");

  useEffect(() => {
    const heroText = "COMPANY";
    let i = 0;

    const newsText = "더바이럴 소식";
    let j = 0;
    const newsTimer = setInterval(() => {
      setTypedNews(newsText.slice(0, j + 1));
      j += 1;
      if (j >= newsText.length) clearInterval(newsTimer);
    }, 90);

    return () => {
      clearInterval(newsTimer);
    };
  }, []);

  return (
    <main className="space-y-16 pb-20">
      <NavBar />

      <section className="relative isolate overflow-hidden rounded-[32px] border border-white/5 bg-black shadow-2xl">
        <div className="relative h-[60vh] w-full overflow-hidden rounded-[32px]">
          <Image
            src="/img/h_COMPANY.PNG"
            alt="Company Hero"
            fill
            priority
            className="object-cover"
            sizes="100vw"
          />
          <div className="absolute inset-0 bg-gradient-to-b from-black/80 via-black/40 to-black/80" />
          <div className="absolute inset-0 flex items-center justify-center">
            <p className="animate-float-slow text-5xl font-semibold tracking-[0.25em] text-white">COMPANY</p>
          </div>
        </div>
      </section>

      <section className="mx-auto max-w-6xl space-y-12 px-6">
        <div className="space-y-3 text-center">
          <p className="animate-fade-up text-sm font-semibold uppercase tracking-[0.18em] text-brand-blue">News</p>
          <h1 className="animate-fade-up text-3xl font-bold text-white sm:text-4xl" style={{ animationDelay: "0.08s" }}>
            {typedNews || "더바이럴 소식"}
          </h1>
          <p className="animate-fade-up text-gray-300" style={{ animationDelay: "0.16s" }}>
            언론보도와 보도자료 등 최신 소식을 전해드립니다.
          </p>
        </div>

        <div className="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
          {newsItems.map((item, idx) => (
            <Link
              key={item.title}
              href={item.link}
              target="_blank"
              rel="noreferrer"
              className="group flex h-full flex-col overflow-hidden rounded-3xl border border-white/10 bg-white/5 shadow-lg transition hover:-translate-y-1 hover:border-brand-blue/50 hover:shadow-xl animate-fade-up"
              style={{ animationDelay: `${0.12 + idx * 0.08}s` }}
            >
              <div className="relative h-48 w-full overflow-hidden">
                <Image
                  src={item.image}
                  alt={item.title}
                  fill
                  className="object-cover transition duration-500 group-hover:scale-105"
                  sizes="(min-width: 1024px) 33vw, (min-width: 640px) 50vw, 100vw"
                />
                {item.badge && (
                  <span className="absolute left-3 top-3 rounded-full bg-white/90 px-3 py-1 text-xs font-semibold text-gray-900">
                    {item.badge}
                  </span>
                )}
              </div>
              <div className="flex flex-1 flex-col gap-2 p-5 text-left">
                <p className="text-sm text-gray-400">{item.date}</p>
                <h3 className="text-lg font-semibold text-white leading-snug">{item.title}</h3>
              </div>
            </Link>
          ))}
        </div>
      </section>

      <Footer />
    </main>
  );
}
