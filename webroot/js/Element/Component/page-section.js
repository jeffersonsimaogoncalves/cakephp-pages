Vue.component('page-section', {
  template: '#page-section',
  props: {
    id: Number,
    i: Number,
  },
  data: function(){
    return {
      baseUrl: this.$root.$el.dataset.webroot,
      content: '',
    };
  },
  created: function(){
    this.$hubOn('page','section-refresh', this.refresh);
    this.baseUrl = this.$root.$el.dataset.webroot;
    this.loadSection();
  },
  mounted: function(){},
  methods: {
    refresh: function(id){
      if(this.id == id) this.loadSection();
    },
    loadSection: function(){
      return this.$http.get(this.baseUrl+'admin/pages/sections/view/'+this.id+'/'+this.i)
      .then(this.loadSectionSuccess, this.error);
    },
    loadSectionSuccess: function(request){
      this.content = request.data;
    },
    error: function(){
      alert('An error occured');
    }
  }
});
