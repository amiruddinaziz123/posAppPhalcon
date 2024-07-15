<div id="wrapper">
<!-- isi html di sini (statis) -->
  </div>
  <div ref="content" id="content">
    <?= $this->getContent() ?>  <!-- jangan di hilangkan. Fungsinya untuk menampilkan content -->
  </div>
</div>
<!-- Page refresh -->
<!-- Page content -->
<!-- Page content end -->
<script type="text/javascript">
  zicare.ready(() => {
    zicare.vmCommon = new Vue({
      delimiters: ["${", "}"],
      el: "#sidebar",
      data: {
        //  add your data here
      },
      computed: {},
      methods: {
        // add your function here
      },
    });
  });
</script>
