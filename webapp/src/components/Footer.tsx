export function Footer() {
  return (
    <footer className="mt-16 border-t border-white/10 bg-[#04070f] px-6 py-12 text-white">
      <div className="mx-auto flex max-w-6xl flex-col gap-10 lg:flex-row lg:items-start lg:justify-between">
        <div className="flex items-center gap-3">
          <img src="/img/viral-logo.png" alt="THE VIRAL" className="h-14 w-18 rounded-md object-cover" />
          <div>
            <p className="text-sm font-semibold tracking-[0.14em] text-brand-blue">THE-VIRAL</p>
            <p className="text-sm text-gray-300">최고의 비즈니스 파트너를 위한 기업</p>
          </div>
        </div>

        <div className="grid flex-1 gap-6 text-sm text-gray-300 md:grid-cols-2">
          <div className="space-y-2">
            <p className="text-gray-500">회사명</p>
            <p className="font-semibold text-white">(주)더바이럴</p>
            <p className="text-gray-500">대표자</p>
            <p className="font-semibold text-white">이신행</p>
            <p className="text-gray-500">설립일</p>
            <p className="font-semibold text-white">2016년 4월 27일</p>
          </div>
          <div className="space-y-2">
            <p className="text-gray-500">대표번호</p>
            <p className="font-semibold text-white">02-515-7002</p>
            <p className="text-gray-500">소재지</p>
            <p className="font-semibold text-white">서울시 서초구 서초대로40길 91 동초빌딩 3F</p>
            <p className="text-gray-500">사업분야</p>
            <p className="font-semibold text-white">NEW MEDIA, COMMUNITY, 언론홍보, 검색 광고, 체험단 운영, 채널 운영</p>
          </div>
        </div>

        <div className="text-sm text-gray-400">
          <p className="cursor-pointer transition hover:text-white">개인정보취급방침</p>
          <p className="cursor-pointer transition hover:text-white">이용약관</p>
          <p className="mt-2 text-gray-500">www.the-viral.co.kr</p>
        </div>
      </div>
    </footer>
  );
}