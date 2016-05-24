Vue.filter('role', function(value, role) {
  return value.filter(function(item) {
    return item.role == role
  })
})

new Vue({
  el: '#app',
  data: {
    people: [
      { name: 'Joe', role: 'admin' },
      { name: 'Susan', role: 'admin' },
      { name: 'Frank', role: 'student' },
      { name: 'Jeffrey', role: 'admin' },
    ]
  }
})
