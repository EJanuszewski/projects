Vue.transition('fade', {
  enterClass: 'flipInX',
  leaveClass: 'fadeOut'
})

new Vue({
  el: '#app',
  data: {
    show: true
  }
})
