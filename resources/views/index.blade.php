<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Developer Diary</title>
  <!-- Include Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <!-- Vue app container -->
  <div id="ui">
    <!-- Vue header component will be rendered here -->
    <page-header-component></page-header-component>
    <!-- Router view to render components based on routes -->
    <router-view></router-view>
  </div>

  <!-- Include Vue framework (Vue 3) -->
  <script src="https://unpkg.com/vue@next"></script>
  <!-- Include Vue Router -->
  <script src="https://unpkg.com/vue-router@4.0.0-beta.15/dist/vue-router.min.js"></script>
  <!-- Include NProgress -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.js"></script>
  <!-- Include Vue Meta -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-meta/3.2.0/vue-meta.umd.min.js"></script>
  <!-- Include Axios -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js"></script>

  <!-- Your Vue app -->
  <script type="module">
    import PageHeaderComponent from '../js/canvas-ui/components/PageHeaderComponent.vue';
    import routes from '../js/canvas-ui/routes.js';

    Vue.use(VueRouter);
    Vue.use(VueMeta);

    const router = new VueRouter({
      mode: 'history',
      base: 'canvas-ui',
      routes
    });

    new Vue({
      el: '#ui',
      router,
      components: {
        PageHeaderComponent
      }
    });
  </script>
</body>
</html>
