<div id="app">
    <!-- isi html disi ya  -->
    <div v-for="(item, index) in list">
      ${item.full_name}
    </div>
</div>
<!-- <?= $this->assets->outputJs('zivue_admission') ?> -->
<script type="text/javascript">
  zicare.loadJS(`<?= $this->url->get('/assets/js/zivue_admission.js') ?>`, () => {
    // to load component
    zicare.ready(() => {
      zicare.vmPage = new Vue({
        el: "#app",
        delimiters: ["${", "}"],
        data: {
          message: "Hello Vue!",
          list:[]
        },
        methods: {
          async handleList(){
            try {
                const result = await axios.get("/admission/getList")
                if(!_.isEmpty(result)){
                  this.list = result.data.results; 
                }
            } catch (error) {
                console.log(error)
            }
          },
        },
        created() {},
        mounted() {
          this.handleList();
        },
      });
    });
  });
</script>
