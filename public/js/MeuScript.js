$('.carousel').carousel({
    interval: 2500
})

$('body').scrollspy({ target: '#navbar-exemplo' })

$('#minhaAba a').on('click', function (e) {
    e.preventDefault()
    $(this).tab('show')
  })
  $('.dropdown-toggle').dropdown()