<div id="app">
    
</div>
<!-- <?= $this->assets->outputJs('zivue_index') ?> -->
<script type="text/javascript">
  zicare.loadJS(`<?= $this->url->get('/assets/js/zivue_index.js') ?>`, () => {
    // to load component
    zicare.ready(() => {
      zicare.vmPage = new Vue({
        el: "#app",
        delimiters: ["${", "}"],
        data: {
          message: "Hello Vue!",
        },
        methods: {
          closeDetail() {
            // isi logic
          },
        },
        created() {},
        mounted() {},
      });
    });
  });
</script>
