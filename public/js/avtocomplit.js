//jQuery(document).ready(function($) {
$("#problem_suggestion").typeahead();
		// Set the Options for "Bloodhound" suggestion engine
    var engine = new Bloodhound({
        remote: {
            url: '/HelpDesk/public/x?q=%QUERY%',
            wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });

    $("#problem_suggestion").typeahead({
        hint: true,
        highlight: true,
        minLength: 3,
				   // onselect: function(obj) { $('#problem_suggestion').typeahead('val', 6464646); }
    }, {
        source: engine.ttAdapter(),
				limit: 10,
				displayKey: function (data) {
        return data.name;
    		},
        // This will be appended to "tt-dataset-" to form the class name of the suggestion menu.
        name: 'usersList',

        // the key from the array we want to display (name,id,email,etc...)
        templates: {
            empty: [
                '<div class="list-group search-results-dropdown"><div class="list-group-item">Nothing found.</div></div>'
            ],
            header: [
                '<div class="list-group search-results-dropdown">'
            ],
            suggestion: function (data) {
							return '<a onclick="document.getElementById(\'problem_id\').value = '+data.id+'; return false" class="list-group-item">' + data.name + '</a>'
      			}
        }
    });
//});
