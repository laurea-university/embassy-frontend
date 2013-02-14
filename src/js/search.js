
var search = {}

search._tags_list = []
search._companies_list = []

search._templates_cache = []
search.compileTemplate = function (id, ctx) {
	if (typeof(search._templates_cache[id]) == 'undefined')
		search._templates_cache[id] = Mustache.compile($(id).html());

	return search._templates_cache[id](ctx);
}

search.getCompany = function (name) {
	var c = false;
	$.each(search._companies_list, function (k, v) {
		if (v['name'] == name) {
			c = v;
			return false;
		}
	});

	return c;
}

search.setupTags = function () {
	if (search._tags_list.length < 1) {
		$.getJSON('query.php', {
			'cmd' : 'getTags',
		}, function (data) {
			search._tags_list = data;
		})
		.success(function () {
			$('#tags-list').html(search.compileTemplate('#tags-list-tmpl', {
				'tags' : search._tags_list,
			}));
		})
		.error(function (e) {
			alert('Unable to fetch data: ' + JSON.stringify(e));
		});
	} else {
		$('#tags-list').html(search.compileTemplate('#tags-list-tmpl', {
			'tags' : search._tags_list,
		}));
	}
}

search.setupCompanies = function () {
	if (search._companies_list.length > 0) {
		$('#companies-table').html(search.compileTemplate('#companies-table-tmpl', {
			'companies' : search._companies_list,
		}));
	} else {
		$.getJSON('query.php', {
			'cmd' : 'getCompanies',
		}, function (data) {
			search._companies_list = data;
		})
		.success(function () {
			$('#companies-table').html(search.compileTemplate('#companies-table-tmpl', {
				'companies' : search._companies_list,
			}));
		})
		.error(function (e) {
			alert('Unable to fetch data: ' + JSON.stringify(e));
		});
	}
}

search.companyAutoComplete = function (query, process) {
	var entry = [];

	$.each(search._companies_list, function (k, v) {
		if (v['name'].toLowerCase().indexOf(query.toLowerCase()) > -1) {
			entry.push(v['name']);
		}
	});

	return entry;
}

search.expandEntry = function (name) {
	var c = search.getCompany(name);

	if (c == false)
		return false;

	$('#companies-table').empty();
	$('#companies-table').html(search.compileTemplate('#companies-table-tmpl', {
		'companies' : c,
	}));

	return true;
}

search.autoCompleteCallback = function () {
	if (search.expandEntry($('#company-search-input').val()) == false) {
		var ctrl = $('#company-search-control');
		var input = $('#company-search-input');

		ctrl.addClass('error');

		/* Weird magic that gets the cursor at the end of the input */
		var ov = input.val();
		input.val('');
		input.val(ov);
		input.focus();

		input.blur(function () {
			ctrl.removeClass('error');
		});
	} else {
		$('#companies-table').append(search.compileTemplate('#back-button-tmpl', {}));
	}

	return false;
}

search.setupSearchForm = function () {
	$('#company-search-input').click(function () {
		$(this).val('');
	}).typeahead({
		'items' : 3,
		'source' : search.companyAutoComplete,
	});
	$('#company-search-form').submit(search.autoCompleteCallback);
}

search.setupUi = function () {
	search.setupTags();
	search.setupCompanies();
	search.setupSearchForm();
}
