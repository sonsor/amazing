(function(ko, $) {
    'use strict';

    function Amazing(search) {
        this.categories = ko.observableArray([]);
        this.variations = ko.observableArray([]);
        this.icons = ko.observableArray([]);
        this.count = ko.observable(0);
        this.loading = ko.observable(true);
        this.filters = {
            search: ko.observable(search || ''),
            categories: ko.observableArray([]),
            variations: ko.observableArray([]),
            page: ko.observable(0)
        };

        this.init();
    }

    Amazing.prototype.init = function() {
        var self = this;
        this.setup();
        this.pullCategories();
        this.pullVariations();
        this.pullIcons();

        this.filters.search.extend({
            rateLimit: 500
        });

        this.hasMore = ko.computed(function() {
            var count = this.count();
            var page = this.filters.page();

            return Math.floor(count / 100) > page ? true: false

        }.bind(this));

        this.filters.categories.subscribe(function(value) {
            self.reset();
            self.pullIcons();
        });

        this.filters.variations.subscribe(function(value) {
            self.reset();
            self.pullIcons();
        });

        this.filters.search.subscribe(function(value) {
            self.reset();
            self.pullIcons();
        });
    };

    Amazing.prototype.reset = function() {
      this.filters.page(0);
      this.icons([]);
    };

    Amazing.prototype.setup = function() {
        var csrf = $('meta[name="csrf-token"]').attr('content');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrf
            }
        });
    };

    Amazing.prototype.pullCategories = function() {
        var self = this;
        $.getJSON('/categories', function(data) {
            self.categories(data);
        });
    };

    Amazing.prototype.pullVariations = function() {
        var self = this;
        $.getJSON('/variation-types', function(data) {
            self.variations(data);
        });
    };

    Amazing.prototype.pullIcons = function() {
        var self = this;
        var filters = ko.toJSON(this.filters);
        $.ajax({
            method: 'POST',
            url: '/icons',
            contentType: 'application/json',
            data: filters,
            beforeSend: function() {
              self.loading(true);
            },
            complete: function(xhr, status) {
              self.loading(false);
            },
            success: self.success.bind(self),
            error: function(xhr, statua, error) {
                if (self.filters.page() > 0) {
                    self.filters.page(self.filters.page() - 1);
                }
                console.log(error);
            }
        })
    };

    Amazing.prototype.more = function() {
        this.filters.page(this.filters.page() + 1);
        this.pullIcons();
    };

    Amazing.prototype.success = function(data) {
        this.count(data.count);
        data = data.data || [];
        var icons = this.icons();
        for (var i in data) {
            icons.push({
                name: data[i].name,
                url: '/icons/' + data[i].slug + '/' + data[i].variation.slug,
                classes: data[i].variation.classes + ' an-' + data[i].classes,
            });
        }
        this.icons(icons);
    };

    var params = new URLSearchParams(window.location.search);
    ko.applyBindings(new Amazing(params.get('search')));


})(ko, jQuery)