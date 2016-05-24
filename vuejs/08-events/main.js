Vue.component('message', {
  template: '<input v-model="message" @keyup.enter="storeMessage" />',
  data: function() {
    return {
      message: ''
    }
  },
  methods: {
    storeMessage: function() {
      this.$dispatch('new-message', this.message);

      this.message = '';
    }
  }
});

new Vue({
  el: '#app',
  data: {
    messages: []
  },
  methods: {
    handleNewMessage: function(message) {
      this.messages.push(message);
    }
  }
})
