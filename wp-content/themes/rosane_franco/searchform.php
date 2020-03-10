		<button class="btn my-2 search cinzaEscuro pl-0" id="fakeSearchButton"><ion-icon name="search"></ion-icon></button>
		<div id="busca" style="display: none;">
		    <input type="search" class="form-control search btn" onfocus="this.value=''" value="<?php echo get_search_query(); ?>" autocomplete="off" name="s" title="Search" id="SearchField">
			<button onclick="toggleSearch()" class="mx-2 search adobe" id="searchButton">buscar</button>
		</div>