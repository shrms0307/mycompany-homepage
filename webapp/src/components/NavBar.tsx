"use client";

import Link from "next/link";
import { usePathname } from "next/navigation";
import { navItems } from "@/components/navItems";

export function NavBar() {
  const pathname = usePathname();

  return (
    <nav className="sticky top-6 z-30 mx-auto flex max-w-6xl items-center justify-between rounded-2xl border border-white/10 bg-black/60 px-4 py-3 shadow-lg backdrop-blur">
      <Link href="/" className="flex items-center gap-3">
        <img src="/img/viral-logo.png" alt="THE VIRAL" className="h-11 w-14 rounded-md object-cover" />
        <span className="text-sm font-semibold tracking-[0.14em] text-white">THE-VIRAL</span>
      </Link>

      <div className="hidden items-center gap-2 text-sm font-medium text-gray-200 md:flex">
        {navItems.map((item) => {
          const active = pathname === item.href;
          return (
            <Link
              key={item.label}
              href={item.href}
              className={`rounded-xl px-3 py-2 transition focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-brand-blue ${
                active
                  ? "bg-white/10 text-brand-blue"
                  : "text-gray-200 hover:bg-white/5 hover:text-white"
              }`}
            >
              {item.label}
            </Link>
          );
        })}
      </div>
    </nav>
  );
}