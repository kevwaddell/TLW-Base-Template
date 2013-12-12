<?php 
function remove_footer_admin () {
echo 'Created by <a href="http://www.tlwsolicitors.co.uk" target="_blank">TLW Solicitors</a> | <a href="mailto:kwaddell@tlwsolicitors.co.uk">Webmaster</a></p>';
}

add_filter('admin_footer_text', 'remove_footer_admin');
?>