(function(ko, $) {
    'use strict';

    function Amazing() {
        this.categories = ko.observableArray([]);
        this.variations = ko.observableArray([]);
        this.icons = ko.observableArray([]);
        this.count = ko.observable(0);
        this.filters = {
            search: ko.observable(''),
            categories: ko.observableArray([]),
            variations: ko.observableArray([]),
            page: ko.observable(0)
        };

        this.init();
    }

    Amazing.prototype.init = function() {
        this.pullCategories();
        this.pullVariations();
        this.pullIcons();
    };

    Amazing.prototype.pullCategories = function() {
        this.categories.push({
            name: 'Computers',
            slug: 'computers',
            value: '1'
        }, {
            name: 'Auto',
            slug: 'auto',
            value: '2'
        });
    };

    Amazing.prototype.pullVariations = function() {
        this.variations.push({
            name: 'Solid',
            slug: 'solid',
            value: '1'
        }, {
            name: 'Brands',
            slug: 'brands',
            value: '2'
        });
    };

    Amazing.prototype.pullIcons = function() {
        var filters = ko.toJSON(this.filters);
        this.send('/icons', filters, function(response) {
            
        });
    };

    Amazing.prototype.more = function() {
        this.page(this.page() + 1);
    };

    ko.applyBindings(new Amazing());


})(ko, jQuery)