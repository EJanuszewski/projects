
Vue.component('tasks', {
  template: '#tasks-template',
  props: ['tasks'],
  data: function() {
    return {
    }
  },
  methods: {
    toggleCompleted: function(task) {
      task.completed = !task.completed;
    }
  }
});
new Vue({
  el: '#app',
  data: {
    tasks: [
      { body: 'Go to the store', completed: false },
      { body: 'Go to the bank', completed: false },
      { body: 'Go to the doctor', completed: false }
    ]
  }
});
