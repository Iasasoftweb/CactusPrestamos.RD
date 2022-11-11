
    <ul class="nav navbar-nav mr-auto float-left">
        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
        <li class="dropdown nav-item mega-dropdown d-none d-lg-block"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Buscar</a>
           
        </li>
        <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
            <div class="search-input">
                <input class="input" type="text" placeholder="Buscar registro" tabindex="0"  id="inputSearch"
                 wire:keydown.enter.prevent="$emit( 'searching', document.getElementById('inputSearch').value )">
                <div class="search-input-close"><i class="ft-x"></i></div>
                
            </div>
        </li>
    </ul>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            livewire.on('searching', action => {
                document.getElementById('inputSearch').value = ''
             
                    })
        })


        // Navigation Search area Close
    // $(".search-input-close i").on("click", function () {
    //   var $this = $(this),
    //     searchInput = $(this).closest(".search-input")
    //   if (searchInput.hasClass("open")) {
    //     searchInput.removeClass("open")
    //     $(".search-input input").val("")
    //     $(".search-input input").blur()
    //     $(".search-input .search-list").removeClass("show")
    //     if ($(".app-content").hasClass("show-overlay")) {
    //       $(".app-content").removeClass("show-overlay")
    //     }
    //   }
    // })
    </script>
