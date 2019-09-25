// the semi-colon before function invocation is a safety net against concatenated
// scripts and/or other plugins which may not be closed properly.
;( function( $, window, document, undefined ) {

    "use strict";

    var pluginName = "towerSelect",
        defaults = {
        };

    function Plugin( element, options, id )
    {
        this.id = id;
        this.element = element;
        this.settings = $.extend( {}, defaults, options );
        this._defaults = defaults;
        this._name = pluginName;

        this.init();
    }

    $.extend( Plugin.prototype, {

        init: function()
        {
            var _ = this;

            _.sel_text = $(_.element).find('option:selected').text();
            _.label = $(_.element).parent().parent().children('.gfield_label').text();

            _.createElement();
            _.optionListener();
            _.bindNotifications();
        },

        createElement: function()
        {
            var _ = this;

            $(_.element).before('<div class="current-select">' + _.sel_text + '</div>');
            $(_.element).wrap('<div class="select-container"></div>');
            $(_.element).before('<label>' + _.label + '</label>');
            $(_.element).before('<span class="select-close"></span>');
            $(_.element).children('option').each(function(){
                var optionValue = $(this).attr('value');
                var dropdownInner = '<div data-value="'+ optionValue +'" class="select-option">'+ this.text; +'</div>';
                var select = $(this).parent('select');
                $(select).before(dropdownInner);
            });
        },

        optionListener: function()
        {
            $(document).on('click', '.select-option', function() {
                //Change Container
                var change_target = $(this).parent().prev('.current-select');
                var text = $(this).text();
                var value = $(this).attr('data-value');
                $(change_target).text(text);
                $('.select-option-active').removeClass('select-option-active');
                $(this).addClass('select-option-active');
                $(this).parent().prev('.current-select').removeClass('active-select');
                $(this).parent().fadeToggle();

                //Make the select not be a biatch
                $(this).siblings('select').children('option').attr('selected', false);
                $(this).siblings('select').children('option[value="'+ value +'"]').attr('selected', true);
                $(this).siblings('select').trigger('change');
            });
        },

        bindNotifications: function()
        {
            $(document).bind('gform_post_render', function(){
                $('.gform_fields select').each(function(){
                    $(this).towerSelect();
                });
            });
        }

    } );

    // A really lightweight plugin wrapper around the constructor,
    // preventing against multiple instantiations
    $.fn[ pluginName ] = function( options ) {
        var id = 0;
        return this.each( function() {
            if ( !$.data( this, "plugin_" + pluginName ) ) {
                $.data( this, "plugin_" +
                    pluginName, new Plugin( this, options, id ) );

                id++;
            }
        } );
    };
} )( jQuery, window, document );