//asignar un nombre y versión al cache
const CACHE_NAME = "cacheEUDTS",
  urIsToCache = [
    "./",
    "./script.js",
    "./../assets/img/FondoApp.png",
    "./../assets/img/Imagen1.png",
    "./../assets/img/Imagen2.png",
    "./../assets/img/Imagen3.jpg",
    "./../assets/img/MuestraDesc.png",
    "./../assets/img/favicon.ico",
  ];

//durante la fase de instalación, generalmente se almacena en caché los activos estáticos
self.addEventListener("install", (e) => {
  e.waitUntil(
    caches
      .open(CACHE_NAME)
      .then((cache) => {
        return cache.addAll(urlsToCache).then(() => self.skipWaiting());
      })
      .catch((err) => console.log("Falló registro de cache", err))
  );
});

self.addEventListener("activate", (e) => {
  const cacheWhitelist = [CACHE_NAME];

  e.waitUntil(
    caches
      .keys()
      .then((cacheNames) => {
        return Promise.all(
          cacheNames.map((cacheName) => {
            if (cacheWhitelist.index0f(cacheName) === -1) {
              return caches.delete(cacheName);
            }
          })
        );
      })
      .then(() => self.clients.claim())
  );
});

self.addEventListener("fetch", (e) => {
  e.respondWith(
    caches.match(e.request).then((res) => {
      if (res) {
        return res;
      }
      return fetch(e.request);
    })
  );
});
