<?php function my_login_redirect( $redirect_to, $request, $user ) {
    //is there a user to check?
    global $user;
    if ( isset( $user->roles ) && is_array( $user->roles ) ) {

        if ( in_array( 'dealer', $user->roles ) ) {
            // redirect them to the default place
            $data_login = get_option('/hamilton/price-lists/');

            return get_permalink($data_login[0]);
        } else {
            return home_url();
        }
    } else {
        return $redirect_to;
    }
}
add_filter( 'login_redirect', 'my_login_redirect', 10, 3 );