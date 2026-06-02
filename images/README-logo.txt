NMPPDB Logo – used by Manage Species export header (Copy / CSV / PDF / Print)

In the live project, the logo file used for the NMPPDB header on Manage Species exports is:

  Project root:  images/nmppdb-logo.jpg

dashboard/manage-species.php expects it at:
  __DIR__ . '/../images/nmppdb-logo.jpg'   (i.e. project root images/nmppdb-logo.jpg)

That same path is used for:
- The on-screen print header (Ctrl+P): <img src="SITE_URL/images/nmppdb-logo.jpg">
- PDF export: logo is embedded as base64 from file_get_contents($logoPath)
- Print export: getExportHeaderHtml() uses $logoUrl (SITE_URL + /images/nmppdb-logo.jpg)

To make the reference folder self-contained for testing, copy the logo from the live project here as:
  _admin-features-reference/images/nmppdb-logo.jpg

Then, when running from the reference folder, ensure dashboard’s __DIR__/../images resolves to this images folder (or adjust paths in the copied manage-species.php accordingly).
