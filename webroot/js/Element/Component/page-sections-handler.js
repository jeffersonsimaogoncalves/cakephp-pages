Vue.component('page-sections-handler', {
  template: '#page-sections-handler',
  data: function(){
    return {
      baseUrl: this.$root.$el.dataset.webroot
    };
  },
  props: {},
  created: function(){
    this.$hubOn('page','section-add', this.add);
  },
  mounted: function(){},
  methods: {
    add: function(){
      alert('section add');
    }
  }
});
