<?php 
/**
 * Our custom search form, displayed in the header.
 */
?>

<form role="search" method="get" class="search-form flex flex-wrap flex-center" action="">
    <label>
        <span class="screen-reader-text"><?php esc_html_e( 'Search&nbsp;:', 'voyager' ); ?></span>
        <input type="search" class="search-field" placeholder="<?php esc_attr_e( 'Cheap trip to the Moon', 'voyager' ); ?>" value="" name="s">
    </label>
    <button type="submit" class="search-submit">
        <svg class="icon icon-search txt-2" aria-hidden="true" viewBox="238.67 90 24.51 24.2" xmlns="http://www.w3.org/2000/svg"><path d="m262.7 111.45-6.7276-6.7276c1.0124-1.5056 1.6039-3.3167 1.6039-5.2636 0-5.2146-4.2424-9.457-9.457-9.457-5.2146 0-9.457 4.2424-9.457 9.457 0 5.2147 4.2424 9.4571 9.457 9.4571 2.106 0 4.0532-0.69226 5.6266-1.8607l6.6746 6.6745c0.31473 0.31477 0.72729 0.47216 1.1398 0.47216 0.41257 0 0.8251-0.15739 1.1398-0.47216 0.62955-0.62955 0.62955-1.6502 0-2.2797zm-21.351-11.991c0-3.7332 3.0371-6.7704 6.7704-6.7704 3.7332 0 6.7704 3.0372 6.7704 6.7704 0 3.7332-3.0372 6.7704-6.7704 6.7704-3.7332 0-6.7704-3.0372-6.7704-6.7704z"></path></svg>
        <span class="search-submit-label screen-reader-text"><?php esc_html_e( 'Search', 'voyager' ); ?></span>
    </button>
</form>