# laraver-package

This is an image service, designed to ingest images and prepare them for use on the site. (test task)


    Accept a multipart form image upload
    Resize / Recompress the image to at least 3 sizes (think thumbnail, small and full). You may change the image format and compression to best suite use on a website
    Store the image to S3 or GCP cloud storage and create a public url - ideally with a CDN frontend
    Save the image data to a table of your design in the local mysql database
    Make the image available to the frontend
