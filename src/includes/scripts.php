<script src="/js/jquery-3.4.1.js"></script>
<script src="/js/jquery.lazyload.js"></script>
<script src="/js/scrollreveal.js"></script>

<script>
  function openNav() {
    document.getElementById("overlay").style.display = "block";
  }

  function closeNav() {
    document.getElementById("overlay").style.display = "none";
  }

  $(function() {
    $("div.lazy").lazyload({
    effect : "fadeIn"
    });
  });
</script>