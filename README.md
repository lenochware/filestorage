# FileStorage
Provides file management functions. You can upload, store, list and manage many files with this class.

Files are stored in directory structure Year/Month/FileName by default. Directories are created
automatically. Each file has record in database table FILESTORAGE and it is assigned to some $entity.

Entity consists from id and type, for example product_id,type=product, so you can assign files to different
types of entities such as products, invoices, orders etc.

### Requirements
* php 5.2+
* pclib 1.8+ ( http://pclib.brambor.net/ )