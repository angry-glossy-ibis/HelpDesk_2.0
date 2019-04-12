axios.get('http://localhost/HelpDesk/public/AgileDosk')
.then(function (response) {
  // handle success
  console.log(response.data.data);
//  var json = JSON.parse(response);
//  console.log(json.data);
  var kanban1 = new jKanban({
      element:'#Пробник',
      boards  : response.data.data,
      dragEl : function (el, source) {
        el.style.cursor = 'pointer';
      },
      dragendEl: function (el) {
        el.style.cursor = 'default';
      },
      dropEl: function (el, target, source, sibling) {
        el.style.cursor = 'default';
        var state = target.parentElement.dataset.id.substring(1);
        var request = el.dataset.eid;
        axios.post('http://localhost/HelpDesk/public/Request/blackboardmove', {
            'state_id': state,
            'request_id': request
          })
          .then(function (response) {
            console.log(response);
          })
          .catch(function (error) {
            console.log(error);
          });
//     console.log(el, target.parentElement, source.parentElement,sibling);
    }
  });

})
.catch(function (error) {
  // handle error
  console.log(error);
})
.then(function () {
// always executed
});
