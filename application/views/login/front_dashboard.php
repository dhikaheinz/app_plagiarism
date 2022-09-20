<?php $this->load->view('template/header'); ?>

    <div id="content" class="">
		<div class="flex items-center justify-center h-screen -mt-14 transition-all">
        <!-- Login Form -->
			<div class="logo flex items-center justify-center flex-col">
				<div class="h-10 mb-14">
					<img class="w-56" src="<?= base_url('assets/img/bigdata_polkesjasa.png'); ?>" alt="">
					<p class="text-center">Poltekkes Kemenkes Jakarta I</p>
				</div>
				<div class="px-5 py-5 bg-white shadow-lg rounded-lg flex items-center justify-center flex-col gap-2">
					<div><p>Web Uji Plagiarisme</p></div>
                    <div class="my-2 md:w-[500px]"><video class="w-full rounded-md" controls src="movie.ogg"></div>
                    <div class="my-3">
                        <a href="#" class="p-3 px-7 hover:bg-slate-500 bg-[#3462a0] rounded-md text-white">
                        Modul Penggunaan Akun Turnitin
                        </a>    
                    </div>
                    <div class="my-3">
                        <a href="#" class="p-3 px-7 hover:bg-slate-500 bg-[#3462a0] rounded-md text-white">
                        Daftar Permohonan Akun Turnitin
                        </a>
                    </div>    
                    <div></div>
				</div>
			</div>
        <!-- Login Form -->
     	</div>
    </div>

	<?php $this->load->view('template/footer'); ?>
		<!-- Footer Close -->

      <script>
			function Menu(e) {
				let list = document.querySelector("ul");
				e.name === "menu"
					? ((e.name = "close"),
					  list.classList.add("top-[70px]"),
					  list.classList.add("opacity-100"))
					: ((e.name = "menu"),
					  list.classList.remove("top-[70px]"),
					  list.classList.remove("opacity-100"));
			}
		</script>

<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
	</body>
</html>
