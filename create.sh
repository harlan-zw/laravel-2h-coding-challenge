export CANDIDATE_NAME=; \
cp -r code ../${CANDIDATE_NAME} && \
cd ../${CANDIDATE_NAME} && \
git init && \
git add . && \
git commit -m 'Initial commit' && \
git remote add origin git@bitbucket.org:repo/laravel-${CANDIDATE_NAME}.git && \
git push -u origin master
