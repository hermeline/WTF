/**
 * Created by bibouille on 27/11/17.
 */

var addressPicker = new AddressPicker({
    map: {
        id: '#map'
    }
    autocompleteService: {
        types: ['(cities)'],
            componentRestrictions: { country: 'FR' }
    }
}
);

// instantiate the typeahead UI
$('#address').typeahead(null, {
    displayKey: 'description',
    source: addressPicker.ttAdapter()
});

// Bind some event to update map on autocomplete selection
$('#address').bind('typeahead:selected', addressPicker.updateMap);
$('#address').bind('typeahead:cursorchanged', addressPicker.updateMap);

addressPicker.bindDefaultTypeaheadEvent($('#address'))

// Listen for selected places result
$(addressPicker).on('addresspicker:selected', function (event, result) {
    $('#your_lat_input').val(result.lat());
    $('#your_lng_input').val(result.lng());
    $('#your_city_input').val(result.nameForType('ville'));
});