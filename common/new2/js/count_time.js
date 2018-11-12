var data_in_site = {
	time_to_come: new Date(),
	time_to_come_timestamp: new Date().getTime() / 1000,
	is_localstorage: 'нет',
	is_coockie: 'нет',
	count_visit: 1
};

function toTimestamp(strDate){
   var datum = Date.parse(strDate);
   return datum;
}

try { 
	// сохраняем информацию о времени проведенного на сайте
	// через localStorage
	if (window.localStorage) 
	{
		data_in_site.is_localstorage = 'да';
		
		// если пользователь не новый
		if(window.localStorage.length != 0)
		{
			var _data_in_site = JSON.parse(localStorage.getItem('data_in_site'));
			if(_data_in_site)
			{
				if (Date.parse(_data_in_site.time_to_come) < (new Date() - 1000*60*60*24*2)) 
				{
					localStorage.removeItem("data_in_site");
				}
				else
				{
					data_in_site.time_to_come = (JSON.parse(localStorage.getItem('data_in_site'))).time_to_come;
					data_in_site.time_to_come_timestamp = (JSON.parse(localStorage.getItem('data_in_site'))).time_to_come_timestamp;
					data_in_site.count_visit = (JSON.parse(localStorage.getItem('data_in_site'))).count_visit;
					data_in_site.count_visit++;
				}
			}
			else
			{
				localStorage.setItem("data_in_site", JSON.stringify(data_in_site));
			}
			
		} 
		
		localStorage.setItem("data_in_site", JSON.stringify(data_in_site));
	
	}
	else
	{
		// сохраняем информацию о времени проведенного на сайте через печеньки
		var _data_in_site = Cookies.get('data_in_site');
		if(typeof _data_in_site === 'undefined')
		{
			Cookies.set('data_in_site', 'sadg6453wesdx', { expires: 2 });
			Cookies.set('time_to_come', data_in_site.time_to_come, { expires: 2 });
			Cookies.set('time_to_come_timestamp', data_in_site.time_to_come_timestamp, { expires: 2 });
			Cookies.set('is_localstorage', 'нет', { expires: 2 });
			Cookies.set('is_coockie', 'да', { expires: 2 });
			Cookies.set('count_visit', 1, { expires: 2 });
		}
		else
		{
			var time_to_come = Cookies.get('time_to_come');
			
			if (Date.parse(time_to_come) < (new Date() - 1000*60*60*24*2)) 
			{
				Cookies.remove('data_in_site');
				Cookies.remove('time_to_come');
				Cookies.remove('time_to_come_timestamp');
				Cookies.remove('is_localstorage');
				Cookies.remove('is_coockie');
				Cookies.remove('count_visit');
				Cookies.set('data_in_site', 'sadg6453wesdx', { expires: 2 });
				Cookies.set('time_to_come', data_in_site.time_to_come, { expires: 2 });
				Cookies.set('time_to_come_timestamp', data_in_site.time_to_come_timestamp, { expires: 2 });
				Cookies.set('is_localstorage', 'нет', { expires: 2 });
				Cookies.set('is_coockie', 'да', { expires: 2 });
				Cookies.set('count_visit', 1, { expires: 2 });
			}
			else
			{
				data_in_site.time_to_come = Cookies.get('time_to_come');
				data_in_site.time_to_come_timestamp = Cookies.get('time_to_come_timestamp');
				data_in_site.count_visit = Cookies.get('count_visit');
				data_in_site.is_localstorage = 'нет';
				data_in_site.is_coockie = 'да';
				data_in_site.count_visit++;
				Cookies.remove('count_visit');
				Cookies.set('count_visit', data_in_site.count_visit, { expires: 2 });
			}
		}
	}
}
catch (e) {
	console.log(e);
}




/*!
 * JavaScript Cookie v2.2.0
 * https://github.com/js-cookie/js-cookie
 *
 * Copyright 2006, 2015 Klaus Hartl & Fagner Brack
 * Released under the MIT license
 */
;(function (factory) {
	var registeredInModuleLoader;
	if (typeof define === 'function' && define.amd) {
		define(factory);
		registeredInModuleLoader = true;
	}
	if (typeof exports === 'object') {
		module.exports = factory();
		registeredInModuleLoader = true;
	}
	if (!registeredInModuleLoader) {
		var OldCookies = window.Cookies;
		var api = window.Cookies = factory();
		api.noConflict = function () {
			window.Cookies = OldCookies;
			return api;
		};
	}
}(function () {
	function extend () {
		var i = 0;
		var result = {};
		for (; i < arguments.length; i++) {
			var attributes = arguments[ i ];
			for (var key in attributes) {
				result[key] = attributes[key];
			}
		}
		return result;
	}

	function decode (s) {
		return s.replace(/(%[0-9A-Z]{2})+/g, decodeURIComponent);
	}

	function init (converter) {
		function api() {}

		function set (key, value, attributes) {
			if (typeof document === 'undefined') {
				return;
			}

			attributes = extend({
				path: '/'
			}, api.defaults, attributes);

			if (typeof attributes.expires === 'number') {
				attributes.expires = new Date(new Date() * 1 + attributes.expires * 864e+5);
			}

			// We're using "expires" because "max-age" is not supported by IE
			attributes.expires = attributes.expires ? attributes.expires.toUTCString() : '';

			try {
				var result = JSON.stringify(value);
				if (/^[\{\[]/.test(result)) {
					value = result;
				}
			} catch (e) {}

			value = converter.write ?
				converter.write(value, key) :
				encodeURIComponent(String(value))
					.replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g, decodeURIComponent);

			key = encodeURIComponent(String(key))
				.replace(/%(23|24|26|2B|5E|60|7C)/g, decodeURIComponent)
				.replace(/[\(\)]/g, escape);

			var stringifiedAttributes = '';
			for (var attributeName in attributes) {
				if (!attributes[attributeName]) {
					continue;
				}
				stringifiedAttributes += '; ' + attributeName;
				if (attributes[attributeName] === true) {
					continue;
				}

				// Considers RFC 6265 section 5.2:
				// ...
				// 3.  If the remaining unparsed-attributes contains a %x3B (";")
				//     character:
				// Consume the characters of the unparsed-attributes up to,
				// not including, the first %x3B (";") character.
				// ...
				stringifiedAttributes += '=' + attributes[attributeName].split(';')[0];
			}

			return (document.cookie = key + '=' + value + stringifiedAttributes);
		}

		function get (key, json) {
			if (typeof document === 'undefined') {
				return;
			}

			var jar = {};
			// To prevent the for loop in the first place assign an empty array
			// in case there are no cookies at all.
			var cookies = document.cookie ? document.cookie.split('; ') : [];
			var i = 0;

			for (; i < cookies.length; i++) {
				var parts = cookies[i].split('=');
				var cookie = parts.slice(1).join('=');

				if (!json && cookie.charAt(0) === '"') {
					cookie = cookie.slice(1, -1);
				}

				try {
					var name = decode(parts[0]);
					cookie = (converter.read || converter)(cookie, name) ||
						decode(cookie);

					if (json) {
						try {
							cookie = JSON.parse(cookie);
						} catch (e) {}
					}

					jar[name] = cookie;

					if (key === name) {
						break;
					}
				} catch (e) {}
			}

			return key ? jar[key] : jar;
		}

		api.set = set;
		api.get = function (key) {
			return get(key, false /* read as raw */);
		};
		api.getJSON = function (key) {
			return get(key, true /* read as json */);
		};
		api.remove = function (key, attributes) {
			set(key, '', extend(attributes, {
				expires: -1
			}));
		};

		api.defaults = {};

		api.withConverter = init;

		return api;
	}

	return init(function () {});
}));