// Copyright (C) 2010-2016 Combodo SARL
//
//   This file is part of iTop.
//
//   iTop is free software; you can redistribute it and/or modify
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   iTop is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with iTop. If not, see <http://www.gnu.org/licenses/>

//iTop Form handler
;
$(function()
{
    // the widget definition, where 'itop' is the namespace,
    // 'template_form_handler' the widget name
    $.widget( 'itop.template_form_handler', $.itop.form_handler,
    {
        // default options
        options:
        {
            template_id: 0
        },

        // the constructor
        _create: function()
        {
            var me = this;
            
            this.element
            .addClass('template_form_handler');

            this._super();
        },
   
        // events bound via _bind are removed automatically
        // revert other modifications here
        _destroy: function()
        {
            this.element
            .removeClass('template_form_handler');
            this._super();
        },
        _onUpdateFields: function(event, data)
        {
            var me = this;
            var sFormPath = data.form_path;
            var sUpdateUrl = GetAbsoluteUrlModulesRoot()+'templates-base/ajax.render.php';

            $(this.element.find('[data-form-path="' + sFormPath + '"]')).block({message:''});
            $.post(
                sUpdateUrl,
                {
                    operation: 'fake_form_update',
                    template_id: this.options.template_id,
                    current_values: this.getCurrentValues(),
                    requested_fields: data.requested_fields,
                    form_path: sFormPath
                },
                function(data){
                    me._onUpdateSuccess(data, sFormPath);
                }
            )
            .fail(function(data){ me._onUpdateFailure(data, sFormPath); })
            .always(function(data){
                me.alignColumns();
                $(me.element.find('[data-form-path="' + sFormPath + '"]')).unblock();
                me._onUpdateAlways(data, sFormPath);
            });
        },
        // On initialization or update
        alignColumns: function()
        {
            var iMaxWidth = 0;
            var oLabels = $(this.element.find('td.form-field-label'));
            // Reset the width to the automatic (original) value
            oLabels.width('');
            oLabels.each(function() {
                iMaxWidth = Math.max(iMaxWidth, $(this).width());
            });
            oLabels.width(iMaxWidth);
        },
        // Intended for overloading in derived classes
        _onSubmitClick: function()
        {
        },
        // Intended for overloading in derived classes
        _onCancelClick: function()
        {
        },
        // Intended for overloading in derived classes
        _onUpdateFailure: function(data)
        {
        },
        // Intended for overloading in derived classes
        _disableFormBeforeLoading: function()
        {
        },
        // Intended for overloading in derived classes
        _enableFormAfterLoading: function()
        {
        },
    });
});
