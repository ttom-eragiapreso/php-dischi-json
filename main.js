const { createApp } = Vue;

createApp({

  data(){
    return {
      discs: [],
      apiUrl: 'dischi.json'
    }
  },

  methods: {
    getLibrary(){
      axios.get(this.apiUrl)
      .then(r => {
        console.log(r.data)
        this.discs = r.data
      })
    }
  },

  mounted(){
    this.getLibrary()
  }

}).mount("#app")