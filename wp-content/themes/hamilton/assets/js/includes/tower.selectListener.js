// the semi-colon before function invocation is a safety net against concatenated
// scripts and/or other plugins which may not be closed properly.
;( function( $, window, document, undefined ) {

    "use strict";

    var pluginName = "selectListener",
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


            _.optionListener();
            // _.closeListener();
            _.selectListener();
            _.bindNotifications();

        },

        optionListener: function()
        {
            $('.select-option').click(function(){
                //Change Container
                var change_target = $(this).parent().prev('.current-select');
                var text = $(this).text();
                var value = $(this).attr('data-value');
                $(change_target).text(text);
                $('.select-option-active').removeClass('select-option-active');
                $(this).addClass('select-option-active');
                // $(this).parent().prev('.current-select').removeClass('active-select');
                // $(this).parent().fadeToggle();
                //Make the select not be a biatch
                $(this).siblings('select').children('option').attr('selected', false);
                $(this).siblings('select').children('option[value="'+ value +'"]').attr('selected', true);
                $(this).siblings('select').trigger('change');
            });
        },

        closeListener: function()
        {
            $('.select-close').click(function(){
                $(this).parent().fadeToggle();
                $(this).parent().prev('.current-select').removeClass('active-select');
            });
        },

        selectListener: function()
        {
            $('.current-select').click(function(){
                $(this).next('.select-container').fadeToggle();
                $(this).toggleClass('active-select');
            });

            $(document).click(function(e){
                // if ( $('.select-container').is(":visible") ) {
                //     $('.select-container:visible').fadeToggle();
                //     // $(this).prev('.current-select').removeClass('active-select');
                // }
                if ( !$(e.target).hasClass('current-select') ) {
                    $('.select-container:visible').fadeToggle();
                    $('.select-container:visible').prev('.current-select').removeClass('active-select');
                }

            });

        },

        bindNotifications: function()
        {
            $(document).bind('gform_post_render', function(){

                $('.current-select').click(function(){
                    $(this).next('.select-container').fadeToggle();
                    $(this).toggleClass('active-select');
                });

                $('.select-option').click(function(){
                    //Change Container
                    var change_target = $(this).parent().prev('.current-select');
                    var text = $(this).text();
                    var value = $(this).attr('data-value');
                    $(change_target).text(text);
                    $('.select-option-active').removeClass('select-option-active');
                    $(this).addClass('select-option-active');
                    // $(this).parent().prev('.current-select').removeClass('active-select');
                    // $(this).parent().fadeToggle();
                    //Make the select not be a biatch
                    $(this).siblings('select').children('option').attr('selected', false);
                    $(this).siblings('select').children('option[value="'+ value +'"]').attr('selected', true);
                    $(this).siblings('select').trigger('change');
                });

                // $('.select-close').click(function(){
                //     $(this).parent().fadeToggle();
                //     // $(this).parent().prev('.current-select').removeClass('active-select');
                //     alert('hi');
                // });

                // $('.current-select').click(function(){
                //     $(this).next('.select-container').fadeToggle();
                //     $(this).toggleClass('active-select');
                // });
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