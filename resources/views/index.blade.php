<x-layout :titre="$titre">


    <section id="first" >
        <article id="mid">
            <img class ="logo" src="{{Vite::asset("resources/pictures/logo.png")}}" alt="Logo Thibault Lombart">
        </article>
        <article id="bottom">
            <article class = "flexbottom">
                <a href="#apropos">{{__('About me')}}</a>
                <p> / </p>
                <a href="#projets">{{__('Projects')}}</a>
                <p> / </p>
                <a href="#competences">{{__('Skills')}}</a>
                <p> / </p>
                <a href="#contact">{{__('Contact me')}}</a>
            </article>
        </article>
    </section>

    <section id="apropos">
        <article class="apropos-article">
            <h2>{{__("Welcome! My name is Thibault Lombart.")}}</h2>
            <h3>{{__("I'm a junior developer, I'm in second year of computer science university at University of Technology at Lens, France.")}}</h3>
            <p>{{__("I've always had a passion for computers and video games. I've always wanted to code programs to add to my favorite games (like Minecraft). I got into computing when I discovered a computer-related subject at the age of 16, and I was immediately hooked and jumped into the deep end.")}}</p>
        </article>
    </section>

    <section id="projects">

        <h2>Examples of Projects</h2>

        <article class="case-total">

        </article>

    </section>


</x-layout>
