<?php
    $searchval = $_GET['search'];
?>

<script>

    let link = 'https://www.google.com/search?q='+'<?php echo $searchval; ?>';
    window.location.replace(link);

</script>
