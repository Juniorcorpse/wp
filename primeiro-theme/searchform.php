<form role="search" method="GET" class="search-form" action="<?= esc_url( home_url('/') );?>">
<input type="search" name="s" value="<?= the_search_query() ;?>"/>
<input type="submit" value="BuscarJr"/>
</form>