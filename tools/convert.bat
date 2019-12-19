for /r %%f in (.\input\*) do cwebp -q 80  %%f -o .\output\%%~nf.webp
