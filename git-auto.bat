@echo off
echo ==================================
echo     GIT AUTO PUSH START
echo ==================================
git add .
git commit -m "Auto commit"
git push origin main
echo.
echo ✅ Selesai di-push ke origin/main
pause
