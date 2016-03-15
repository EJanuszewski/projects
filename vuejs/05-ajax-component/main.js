Vue.component('tasks', {
  template: '#tasks-template',
  data: function() {
    return {
      task: '',
      tasks: []
    }
  },
  created: function() {
    this.getListItems();
  },
  methods: {
    getListItems: function() {
      this.$http({ url: 'http://localhost:3001/tasks', method: 'GET' }).then(function(response) {
        this.tasks = response.data;
      }, function(error) {
        
      })
    },
    toggleCompleted: function(task) {
      if(!task.editing)
        task.completed = !task.completed;
    },
    isCompleted: function(task) {
      return task.completed;
    },
    inProgress: function(task) {
      return !this.isCompleted(task);
    },
    deleteTask: function(task) {
      this.tasks.$remove(task);
    },
    clearCompleted: function() {
      this.tasks = this.tasks.filter(this.inProgress);
    },
    addTask: function(task) {
      if(task)
        this.tasks.push({ body: task, completed: false });
      this.task = '';
    },
    editTask: function(task) {
      Vue.set(task, 'editing', true);
    },
    saveTask: function(task) {
      task.editing = false;
    }
  },
  computed: {
    remaining: function() {
      var vm = this;
      return this.tasks.filter(this.inProgress).length;
    }
  }
})
Vue.config.debug = true;
new Vue({
  el: '#app',
  methods: {
    toggleCompleted: function(task) {
      task.completed = !task.completed;
    }
  }
})
