<x-app-layout>
    @include('layouts.navigation')
    <section id="home" class="relative">
        <div class="blob1"></div>
        <div class="blob2"></div>
        <div class="container py-15 md:py-0">
            <div class="flex flex-col items-center z-20 md:flex-row">
                <div class="text-center md:text-left md:w-full">
                    <h1 class="title font-bold pb-1 mt-3 mb-4 bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-30% to-emerald-500 to-90% bg-clip-text text-transparent">Capture The Flag</h1>
                    <p class="leading-relaxed mb-10 text-slate-700 text-lg text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, distinctio quisquam soluta quas a architecto non sed vitae ipsam expedita, ratione, exercitationem ea recusandae ipsa id. Facere cupiditate distinctio quibusdam!</p>
                    <Link href="/chalengge" class="font-semibold px-4 py-3 rounded-md bg-gradient-to-r from-cyan-500 to-blue-500 text-white">Let's Begin</Link>
                </div>
                <div class="W-1/2 md:w-[900px] animate-updown md:-my-4">
                    <img src="/images/protection.png" alt="">
                </div>
            </div>
        </div>
    </section>
        <section class="bg-color-primary-light py-10">
            <div class="container relative">   
                <div class="flex flex-col items-center md:justify-evenly md:flex-row">
                    <div class="hidden mb-12 md:flex md:left-40 md:w-[300px] md:ml-20">
                        <img src="/images/ask.png" alt="" class="animate-wiggle">
                    </div>
                    <div class="text-center md:text-left md:w-1/2 md:ml-20 px-3">
                        <h1 class="title mb-4 text-white">Capture The Flag?</h1>
                        <p class="leading-relaxed mb-10 text-slate-400 text-justify">Capture The Flags, or CTFs, are a kind of computer security competition. Teams of competitors (or just individuals) are pitted against each other in a test of computer security skill. Very often CTFs are the beginning of one's cyber security career due to their team building nature and competetive aspect. In addition, there isn't a lot of commitment required beyond a weekend. In this guide/wiki/handbook you'll learn the techniques, thought processes, and methodologies you need to succeed in Capture the Flag competitions.</p>
                    </div>
                </div>
            </div>
        </section>
        <x-footer-layout />
</x-app-layout>
