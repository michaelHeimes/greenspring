<?php // Borrowed with love from FoundationPress
	function joints_page_navi() {
		global $wp_query;
		$big = 999999999; // This needs to be an unlikely integer
		// For more options and info view the docs for paginate_links()
		// http://codex.wordpress.org/Function_Reference/paginate_links
		$paginate_links = paginate_links( array(
			'base' => str_replace( $big, '%#%', html_entity_decode( get_pagenum_link( $big ) ) ),
			'current' => max( 1, get_query_var( 'paged' ) ),
			'total' => $wp_query->max_num_pages,
			'mid_size' => 5,
			'prev_next' => true,
		    'prev_text' => __( '<svg xmlns="http://www.w3.org/2000/svg" width="17.002" height="11.773" viewBox="0 0 17.002 11.773">
  <g id="Group_472" data-name="Group 472" transform="translate(1575.966 2566.074) rotate(180)">
    <g id="Group_96" data-name="Group 96" transform="translate(1558.964 2554.832)">
      <g id="Group_95" data-name="Group 95" transform="translate(0 5.356)">
        <line id="Line_1088" data-name="Line 1088" x2="15.8" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="1.5"/>
      </g>
      <path id="Path_35" data-name="Path 35" d="M67,.4l5.356,5.356L67,11.112" transform="translate(-56.414 -0.4)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="1.5" fill-rule="evenodd"/>
    </g>
  </g>
</svg>
', 'jointswp' ),
		    'next_text' => __( '<svg xmlns="http://www.w3.org/2000/svg" width="17.002" height="11.773" viewBox="0 0 17.002 11.773">
  <g id="Group_473" data-name="Group 473" transform="translate(-1558.964 -2554.301)">
    <g id="Group_96" data-name="Group 96" transform="translate(1558.964 2554.832)">
      <g id="Group_95" data-name="Group 95" transform="translate(0 5.356)">
        <line id="Line_1088" data-name="Line 1088" x2="15.8" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="1.5"/>
      </g>
      <path id="Path_35" data-name="Path 35" d="M67,.4l5.356,5.356L67,11.112" transform="translate(-56.414 -0.4)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="1.5" fill-rule="evenodd"/>
    </g>
  </g>
</svg>
', 'jointswp' ),
			'type' => 'list',
		) );
		$paginate_links = str_replace( "<ul class='page-numbers'>", "<ul class='pagination'>", $paginate_links );
		$paginate_links = str_replace( '<li><span class="page-numbers dots">', "<li><a href='#'>", $paginate_links );
		$paginate_links = str_replace( "<li><span class='page-numbers current'>", "<li class='current'>", $paginate_links );
		$paginate_links = str_replace( '</span>', '</a>', $paginate_links );
		$paginate_links = str_replace( "<li><a href='#'>&hellip;</a></li>", "<li><span class='dots'>&hellip;</span></li>", $paginate_links );
		$paginate_links = preg_replace( '/\s*page-numbers/', '', $paginate_links );
		// Display the pagination if more than one page is found.
		if ( $paginate_links ) {
			echo '<div class="page-navigation">';
			echo $paginate_links;
			echo '</div><!--// end .pagination -->';
		}
	}