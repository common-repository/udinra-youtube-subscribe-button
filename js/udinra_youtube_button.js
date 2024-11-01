(function () {
    'use strict';

    tinymce.PluginManager.add('udinra_youtube_subscribe', function (editor, url) {
        editor.addButton('udinra_youtube_subscribe', {
            title: 'Udinra YouTube Button',
            image: url + '/../image/youicon.png',

            onclick: function () {
                editor.windowManager.open({
                    title: 'Udinra YouTube Button Configuration',
                    body: [
                        {
                            type: 'textbox',
                            size: 40,
                            name: 'channel',
                            label: 'Channel name(*)'
                        },
                        {
                            type: 'container',
                            name: 'container',
                            label: '',
                            html: '<h1 style="text-align: center">OR<h1>'
                        },
                        {
                            type: 'textbox',
                            size: 40,
                            name: 'channelid',
                            label: 'Channel ID(*)'
                        },
                        {
                            type: 'listbox',
                            name: 'layout',
                            label: 'Layout',
                            values: [
                                {text: 'Default', value: 'default'},
                                {text: 'Full', value: 'full'}
                            ]
                        },
                        {
                            type: 'listbox',
                            name: 'theme',
                            label: 'Theme',
                            values: [
                                {text: 'Light', value: 'default'},
                                {text: 'Dark', value: 'full'}
                            ]
                        },
                        {
                            type: 'listbox',
                            name: 'count',
                            label: 'Count',
                            values: [
                                {text: 'Default (show)', value: 'default'},
                                {text: 'Hide', value: 'hidden'}
                            ]
                        },
                        {
                            type: 'listbox',
                            name: 'style',
                            label: 'Style',
                            values: [
                                {text: 'Aqua', value: 'UdinraYouTubeAqua'},
								{text: 'Teal', value: 'UdinraYouTubeTeal'},
								{text: 'Chocolate', value: 'UdinraYouTubeChocolate'},
								{text: 'Coral', value: 'UdinraYouTubeCoral'},
								{text: 'Golden', value: 'UdinraYouTubeGolden'},
								{text: 'Pink', value: 'UdinraYouTubePink'},
								{text: 'Green 1', value: 'UdinraYouTubeLightGreen'},
								{text: 'Green 2', value: 'UdinraYouTubeSeaGreen'},
								{text: 'Grey', value: 'UdinraYouTubeGrey'},
								{text: 'Tan', value: 'UdinraYouTubeTan'},
								{text: 'White', value: 'UdinraYouTubeWhite'},
								{text: 'None', value: 'UdinraYouTubeNone'}																
                            ]
                        },				
						{
                            type: 'textbox',
							size: 40,
                            name: 'header',
                            label: 'Header Text',
                        },
						{
                            type: 'textbox',
							size: 40,
                            name: 'body',
                            label: 'Body Text',
                        }
                    ],
                    onsubmit: function (e) {
                        if (e.data.channel != "" && e.data.channel != null) {
                            editor.insertContent('[udinra_youtube channel=' + e.data.channel +
                            ' layout=' + e.data.layout + ' count=' + e.data.count + ' theme=' + e.data.theme +
							'" style=' + e.data.style + ' header="' + e.data.header + '" body="' + e.data.body + '"]' );
                        }
                        else if (e.data.channelid != "" && e.data.channelid != null) {
                            editor.insertContent('[udinra_youtube channelid=' + e.data.channelid +
                            ' layout=' + e.data.layout + ' count=' + e.data.count + ' theme=' + e.data.theme +
							'" style=' + e.data.style + ' header="' + e.data.header + '" body="' + e.data.body + '"]' );
                        }
                    }
                });
            }
        });
    });
})();


