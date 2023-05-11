if('serviceWorker' in navigator){
  try {
    navigator.serviceWorker.register('serviceWorker.js');
    console.log("Service Worker Registered");
  } catch (error) {
    console.log("Service Worker Registration Failed");
  }
}

// cache ver
const CACHE_NAME = 'waplay-v0.1';

// cache root
const urlsToCache = [
  './',
  './imgs/business/img_yakiniku.jpg'
];

// Service Worker Install
self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(function(cache) {
        console.log('Cache opened');
        return cache.addAll(urlsToCache);
      })
  );
});

// Service Worker fetch Event
self.addEventListener('fetch', function(event) {
  if (event.request.method !== 'GET') {
    return;
  }

  event.respondWith(
    caches.match(event.request)
      .then(function(response) {
        if (response) {
          return response;
        }
        return fetch(event.request).then(function(response) {
          if (!response || response.status !== 200 || response.type !== 'basic') {
            return response;
          }
          var responseToCache = response.clone();
          caches.open(CACHE_NAME)
            .then(function(cache) {
              cache.put(event.request, responseToCache);
            });
          return response;
        });
      })
  );
});

// Service Worker activate Event
self.addEventListener('activate', function(event) {
  // old cache del
  event.waitUntil(
    caches.keys().then(function(cacheNames) {
      return Promise.all(
        cacheNames.filter(function(cacheName) {
          return cacheName != CACHE_NAME;
        }).map(function(cacheName) {
          return caches.delete(cacheName);
        })
      );
    })
  );
});
