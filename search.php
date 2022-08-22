<?php
    $searchval = $_GET['search'];
?>

<script>

    let url = 'https://www.google.com/search?q='+<?php echo $searchval; ?>;
    window.open(url,'_self');

</script>
