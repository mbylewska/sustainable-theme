<div class="search-container">
    <form action="/" method="get">


        <input type="hidden" name="cat" value="8"><!-- search possible only with category 'blog' -->
        <input type="text" placeholder="Search..." name="s" id="search" value="<?php the_search_query(); ?>" required>
        <button type="submit">?</button>

    </form>
</div>