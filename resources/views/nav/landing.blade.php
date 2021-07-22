<nav class="
    top-0
    absolute
    z-50
    w-full
    flex
    flex-wrap
    items-center
    justify-between
    px-2
    py-3
  "
  >
  <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
    <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
      <a class="text-sm
          font-bold
          leading-relaxed
          inline-block
          mr-4
          py-2
          whitespace-nowrap
          uppercase
          text-white
        "
        href="{{ route('welcome') }}"
        >
        Dorlan Renato
      </a>
      <button type="button"
        onclick="toggleNavbar('collapse-navbar')"
        class="
          cursor-pointer
          text-xl
          leading-none
          px-3
          py-1
          border
          border-solid
          border-transparent
          rounded
          bg-transparent
          block
          lg:hidden
          outline-none
          focus:outline-none
        "
        >
        <i class="text-white fas fa-bars"></i>
      </button>
    </div>
    <div id="collapse-navbar"
      class="
        lg:flex
        flex-grow
        items-center
        bg-white
        lg:bg-transparent
        lg:shadow-none
        hidden
      "
      >
      <ul class="flex flex-col lg:flex-row list-none mr-auto hidden">
        <li class="flex items-center">
          <a href="#"
            class="
              lg:text-white
              lg:hover:text-gray-300
              text-gray-800
              px-3
              py-4
              lg:py-2
              flex
              items-center
              text-xs
              uppercase
              font-bold
            "
            >
            <i class="lg:text-gray-300 text-gray-500 far fa-file-alt text-lg leading-lg mr-2"></i>
            DorlanRenato
          </a>
        </li>
      </ul>

      <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
        <li class="flex items-center">
          <a href="https://www.facebook.com/profile.php?id=100052336454624"
            target="_blank" 
            title="facebook"
            class="
              lg:text-white
              lg:hover:text-gray-300
              text-gray-800
              px-3
              py-4
              lg:py-2
              flex
              items-center
              text-xs
              uppercase
              font-bold
            "
            >
            <i class="lg:text-gray-300 text-gray-500 fab fa-facebook text-lg leading-lg"></i>
            <span class="lg:hidden inline-block ml-2">Share</span>
          </a>
        </li>
        <li class="flex items-center">
          <a href="#"
            target="_blank"
            title="tweet"
            class="
              lg:text-white
              lg:hover:text-gray-300
              text-gray-800
              px-3
              py-4
              lg:py-2
              flex
              items-center
              text-xs
              uppercase
              font-bold
            "
            >
            <i class="lg:text-gray-300 text-gray-500 fab fa-twitter text-lg leading-lg "></i>
            <span class="lg:hidden inline-block ml-2">Tweet</span>
          </a>
        </li>
        <li class="flex items-center">
          <a href="https://www.instagram.com/fundaciondorlanrenato_of"
            target="_blank"
            title="Instagram"
            class="
              lg:text-white
              lg:hover:text-gray-300
              text-gray-800
              px-3
              py-4
              lg:py-2
              flex
              items-center
              text-xs
              uppercase
              font-bold
            "
            >
            <i class="lg:text-gray-300 text-gray-500 fab fa-instagram text-lg leading-lg "></i>
            <span class="lg:hidden inline-block ml-2">instagram</span>
          </a>
        </li>
        <li class="flex items-center">
          <button type="button"
            style="transition: all 0.15s ease 0s;"
            class="
              bg-white
              text-gray-800
              active:bg-gray-100
              text-xs
              font-bold
              uppercase
              px-4
              py-2
              rounded
              shadow
              hover:shadow-md
              outline-none
              focus:outline-none
              lg:mr-1
              lg:mb-0
              ml-3
              mb-3
            "
            >
            <i class="far fa-envelope"></i> Contactanos
          </button>
        </li>
      </ul>
    </div>
  </div>
</nav>